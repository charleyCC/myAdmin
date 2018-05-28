<?php
	namespace admin\controller;
	use \core\Controller;

	class ListController extends Controller{
		private $listModel;
		private $url;
		public function __construct(){
			parent::__construct();
			$this->listModel = M('ListModel');
			$this->url = C('url.main').'?m=admin&c=list&a=indexAction';
			
		}

		public function indexAction(){

			$table = $this->listModel->tbName;


			//表数据
			$sql = "select id,title,add_time from {$table} where 1 order by add_time desc";
			$datas = $this->listModel->fetchRows($sql);
			$this->assign('datas',$datas);
 			
 			
			$this->display('List/index.html');
		}

		public function addAction(){
				        		        	
			$this->display('List/add.html');
			
		}

		public function addh(){
			
			//接收表单数据
			$title = $_POST['title'];
			$content = $_POST['content'];
			$add_time = time();

			//调用模型新增数据
			$sql = "insert into ly_list values (null,'{$content}','{$title}',{$add_time})";
			$res = $this->listModel->setData($sql);

			$this->crudFresh('add',$res,$this->url);
			
		}

		#编辑页
		public function editAction(){

			$id = $_REQUEST['id'];		

			$sql = "select * from {$this->listModel->tbName} where id={$id}";
			$data = $this->listModel->fetchRow($sql);
			$this->assign('data',$data);

			$this->display('List/edit.html');
		}

		public function edith(){

			$id = $_GET['id'];
			$title = $_POST['title'];
			$content = $_POST['content'];

			//调用模型修改数据        	
	  		$sql = "update {$this->listModel->tbName} set title='{$title}',content='{$content}' where id={$id}";	

	  		$res = $this->listModel->setData($sql);
	  		$this->crudFresh('edit',$res,$this->url);

		}



		#删除
		public function delAction(){
			$id = $_GET['id'];
			
			$sql = "delete from {$this->listModel->tbName} where id={$id}";

			$re = $this->listModel->setData($sql);
			
			$this->crudFresh('del',$re,$this->url);
			
		}
	}

?>