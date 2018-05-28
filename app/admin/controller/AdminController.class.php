<?php
	namespace admin\controller;
	use \core\Controller;
	class AdminController extends Controller{

		private $url;
		public function __construct(){
			parent::__construct();
			$this->url = C('url.main').'?m=admin&c=admin&a=loginAction';
		}
		#登录页
		public function loginAction(){

			$this->display('Privilege/login.html');
			
		}
		#登录处理
		public function loginHandler(){

			$checkCode = protectStr($_POST['checkcode']);

			//开启session机制
			@session_start();//@抑制可能前面开启过session

			//如果验证码不正确,返回登录页
			//验证码作用是为了防止机器人恶意'灌水'(不断做登录操作)
			if ($checkCode !== $_SESSION['checkCode']) {
				$this->refresh('验证码错误！',$this->url);
			}
			$acc = protectStr($_POST['acc']);
			$pwd = protectStr($_POST['pwd']);

			$adminModel = M('AdminModel');
			//通过查询帐号是否存在,存在再做密码比较是否相等
			$sql = "select id,acc,pwd,nickname,img from {$adminModel->tbName} where acc='{$acc}'";

			$data = $adminModel->fetchRow($sql);
			//如果密码相等,通过,登录成功
			if (!empty($data) && $data['pwd'] === md5($pwd)) {

				//保存后台用户信息到session
				$_SESSION['admin'] = $data;
				//cookie保存本次登录时间,保存周期为会话结束
				setcookie('loginTime',time(),time()+7*24*3600);

				//判断是否勾选了7天免登陆
				if (isset($_POST['rememberMe']) && $_POST['rememberMe'] == 'yes') {
					//记录cookie,保留7天
					//id值为了安全考虑 设置算数干扰
					$id = $data['id']*3-4;
					setcookie('rembMe',$id,time()+7*24*3600);
				}
				$this->refresh('登录成功',C('url.main').'?m=admin&c=admin&a=indexAction');
				
				
			}else{//登录失败
				$this->refresh('账号或密码错误！',$this->url);
			}
		}

		#登出
		public function logoutHandler(){

			//清除保留7天的rembMe和本次登录时间 cookie数据
			setcookie('rembMe','',time()-10);
			setcookie('loginTime','',time()-10);
			//删除帐号的session数据
			@session_start();
			unset($_SESSION['admin']);
			header('Location:'.$this->url);
			exit;
		}

		#后台首页
		public function indexAction(){
			//调用模型查询旅游内容,分类和用户记录数
			$adminModel = M('AdminModel');
			$sql = "select count(id) as num from ly_content where 1";
			$sql2 = "select count(id) as num2 from ly_cat where 1";
			$sql3 = "select count(id) as num3 from ly_admin";
			$sql4 = "select count(id) as num4 from ly_banner";
			$row = $adminModel->fetchRow($sql);
			$row2 = $adminModel->fetchRow($sql2);
			$row3 = $adminModel->fetchRow($sql3);
			$row4 = $adminModel->fetchRow($sql4);
			$this->assign('row',$row);
			$this->assign('row2',$row2);
			$this->assign('row3',$row3);
			$this->assign('row4',$row4);
			$this->display('Privilege/index.html');
		}

		#验证码
		public function checkCodeAction(){
			M('CheckCodeTool')->output();
		}
	}

?>