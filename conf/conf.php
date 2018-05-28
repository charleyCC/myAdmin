<?php
	/*
	* 项目配置信息
	*/
	
	$config = array(
		//数据库相关信息
		'db' => array(
			'type' => 'mysql',
			'host' => 'localhost',
			'port' => 3306,
			'char' => 'utf8',
			'dbname' => 'travel',
			'user' => 'root',
			'password' => ''
		),
		//网站 m:模块(前后台) c:控制器 a:方法
		'web' => array(
			'm' => 'home',
			'c' => 'Home',
			'a' => 'index'
		),
		//文件上传信息
		'upF' => array(
			'limitType' => array('image/png','image/jpeg','image/jpg'),
			'limitSize' => 1000*1024,
			'path' => 'public/admin/upload/'
		),
		//网站域名
		'url' => array(
			'main' => 'http://www.travel.com'
		),
   		 //验证码配置
    	'checkCode' => array(
	        'w' => 80,//验证码画布的宽度
	        'h' => 38,//验证码画布的高度
	        'fontFile'=> PUBLIC_PATH.'simsun.ttc',//验证码字体文件路径
    	)
	);

?>