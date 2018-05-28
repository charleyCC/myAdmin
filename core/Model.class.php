<?php
	namespace core;
	use \PDO;
	use \PDOException;

	class Model{
		protected $pdo;//pdo对象
		protected $pdoStatement;//pdoStatement对象

		public function __construct(){
			
		 	try{
		 		$type = C('db.type');
		 		$host = C('db.host');
		 		$port = C('db.port');
		 		$charset = C('db.char');
		 		$dbname = C('db.dbname');
			 	$user = C('db.user');
			 	$password = C('db.password');

			 	$dsn = "{$type}:host={$host};port={$port};charset={$charset};dbname={$dbname}";
			 
			 	$this->pdo = new PDO($dsn,$user,$password);
			 	//将错误处理模式设置为异常模式
			 	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		 		
			 }catch(PDOException $e){	
				$this->log($e);
			 }

		}

		//设置操作(增,删,改)
		public function setData($sql){
			try{
				 $this->pdo->exec($sql);
			}catch(PDOException $e){
		
				$this->log($e);
				return false;				
			}
			return true;
		}

		//获取一条数据
		public function fetchRow($sql){
			try{
				$this->pdoStatement = $this->pdo->query($sql);
			}catch(PDOException $e){
	
				$this->log($e);
				return false;
			}
			$results = $this->pdoStatement->fetch(PDO::FETCH_ASSOC);
			//先关闭游标,便于下次查询
			$this->pdoStatement->closeCursor();
			return $results;
			
		}
		//获取多条数据
		public function fetchRows($sql){
			try{
				$this->pdoStatement = $this->pdo->query($sql);
			}catch(PDOException $e){

				$this->log($e);
				return false;
			}
			$results = $this->pdoStatement->fetchAll();
			$this->pdoStatement->closeCursor();
			return $results;
			
		}

		//开启事务
		public function beginTransaction(){
			$this->pdo->beginTransaction();
		}
		//回滚事务
		public function rollback(){
			$this->pdo->rollback();
		}
		//提交事务
		public function commit(){
			$this->pdo->commit();
		}

		//引号转义并且包裹
		public function sqlQuote($sql){
			return $this->pdo->quote($sql);
		}

		//返回刚刚插入记录的主键id
		public function lastId(){
			return $this->pdo->lastInsertId();
		}

		//pdo异常log日志
		private function log(PDOException $e){
			
			$str = "***********************错误日期:".date("Y-m-d H:i:s")."****************";
			$str .= "\r\n错误信息:".$e->getMessage();
			$str .= "\r\n错误代码号:".$e->getCode();
			$str .= "\r\n错误所在行:".$e->getLine();
			$str .= "\r\n错误所在文件路径:".$e->getFile()."\r\n\r\n";
			file_put_contents(ROOT_PATH."db_error.log", $str,FILE_APPEND);
			
		}
	}


?>