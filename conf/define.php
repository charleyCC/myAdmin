<?php

	/*
	* 项目常量 加个注释 创建了一个分支dev
	*/
	//项目根目录
	define('ROOT_PATH',str_replace('\\', '/', getcwd().'/'));
	//app目录
	define('APP_PATH', ROOT_PATH.'app/');
	//admin目录
	define('APP_ADMIN_PATH', APP_PATH.'admin/');
	//home目录
	define('APP_HOME_PATH', APP_PATH.'home/');
	//model目录
	define('APP_MODEL_PATH', APP_PATH.'model/');
	//conf目录
	define('CONF_PATH', ROOT_PATH.'conf/');	
	//core目录
	define('CORE_PATH', ROOT_PATH.'core/');
	//plugins目录
	define('PLUGINS_PATH', ROOT_PATH.'plugins/');	
	//public目录
	define('PUBLIC_PATH', ROOT_PATH.'public/');

?>