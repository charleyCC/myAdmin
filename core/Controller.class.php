<?php
	namespace core;
	use \Smarty;
	class Controller extends Smarty{
		private $url;
		public function __construct(){
			$this->url = C('url.main').'?m=admin&c=admin&a=loginAction';
			//非法登入检测
			$this->checkValidate();

			//手动调用Smarty的构造方法
			parent::__construct();
			//设置模板存放目录
			$tempDir = APP_PATH.G('m').'/view';
			$this->setTemplateDir($tempDir);
			//设置编译缓存文件目录
			$compDir = APP_PATH.G('m').'/view_c';
			$this->setCompileDir($compDir);


		}

		//防止非法登入
		private function checkValidate(){
			//开启session机制
			@session_start();
			//不存在acc,并且排除掉login方法所在的控制器和前台
			if (empty($_SESSION['admin']) && !((G('c')=='Admin' && G('a')!='indexAction') || G('m')=='home') ){
				// 勾选7天免登入
				if (!empty($_COOKIE['rembMe'])) {
					$rembMe = ((int)$_COOKIE['rembMe']+4)/3;
					$adminModel = M('AdminModel');
					$sql = "select id,acc,pwd,nickname,img from {$adminModel->tbName} where id={$rembMe}";
					$data = $adminModel->fetchRow($sql);
					if ($data) {
						$_SESSION['admin'] = $data;//重新设置回用户信息
					}else{
						$this->refresh("请先登录",$this->url);
					}
					
				}else{//没有勾选7天免登入
					$this->refresh("请先登录",$this->url);
				}
		
			}
		}

		
		#刷新跳转1
		protected function crudFresh($type,$re,$url){
			switch ($type) {
				case 'add':
					$message = '添加';
					break;
				case 'del':
					$message = '删除';
					break;
				case 'edit':
					$message = '编辑';
					break;		
			}
			if ($re) {
				 $message .= '成功';
				
			}else{
				 $message .= '失败,请检查!';
			}
			$this->refresh($message,$url);
			
		}

		#刷新跳转2
		protected function refresh($message,$url){
			
			$js1 = "<script src='".C('url.main')."/public/admin/js/jquery-1.9.1.min.js' type='text/javascript'></script>";
			$js2 = "<script src='".C('url.main')."/public/admin/assets/layer/layer.js' type='text/javascript'></script>";
			$js3 = '<script type="text/javascript">var i=1;function gourl(){document.getElementById("span").innerHTML=i;i--;}setInterval("gourl()",1000);</script>';

			$js4 = "<script type='text/javascript'>
			layer.open({
			  title : '<span id=\"span\" style=\"color: red;font-size:20px\">2</span>',
			  type: 1,
			  skin: 'layui-layer-demo', //样式类名
			  closeBtn: 0, //不显示关闭按钮
			  anim: 2,
			  shadeClose: true, //开启遮罩关闭
			  content: '{$message}'
			});
			</script>";
			echo $js1.$js2.$js3;

			echo "<body><style>.layui-layer-content{height: 90px;text-align: center;line-height: 90px;}body{background:#7FC7F1}</style>".$js4."</body>";

			header("Refresh:2;url=".$url);
			exit;
		}
	}


?>