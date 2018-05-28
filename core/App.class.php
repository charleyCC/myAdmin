<?php
	/*
	* 框架类
	*/
	namespace core;
	class App{
		private static $obj=[];//存放单例对象
		//自动加载
		public static function autoloader($className){
			$className = str_replace('\\', '/', $className);
			if (strpos($className, 'core') !== false) {
				$fileName = ROOT_PATH.$className.'.class.php';
			}elseif(strpos($className, 'Tool') !== false){
				$fileName = ROOT_PATH.$className.'.class.php';
			}else{
				$fileName = APP_PATH.$className.'.class.php';
			}
			//路径不对,默认访问前台首页
			if (file_exists($fileName)) {
				require_once $fileName;
			}else{
				header("Location:".C('url.main'));
			}
			
		}

		//工厂单例
		public static function M($className){
			if (!isset(self::$obj[$className])) {
				self::$obj[$className] = new $className;
			}
			return self::$obj[$className];
		}

		//run启动方法
		public static function run(){

			//注册自动加载方法
			spl_autoload_register("self::autoloader");

			//模块
			$GLOBALS['m'] = $m = isset($_GET['m']) ? $_GET['m'] : C('web.m');
			//控制器									首字母大写
			$GLOBALS['c'] = $c = isset($_GET['c']) ? ucfirst($_GET['c']) : C('web.c');
			//方法
			$GLOBALS['a'] = $a = isset($_GET['a']) ? $_GET['a'] : C('web.a');
			
			$className = "\\{$m}\\controller\\".$c."Controller";
			
			$controller = self::M($className);

			$controller->$a();		
			
		}


	}
?>