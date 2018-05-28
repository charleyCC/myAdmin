<?php
	namespace admin\controller;
	use \core\Controller;

	class AdminMagController extends Controller{
		private $adMagModel;
		private $url;

		public function __construct(){
			parent::__construct();
			$this->adMagModel = M('AdminMagModel');
			$this->url = C('url.main').'?m=admin&c=adminMag&a=indexAction';
		}

		public function indexAction(){

			$sql = "select id,acc,nickname,regtime,img from {$this->adMagModel->tbName} where 1 order by regtime desc";
			$datas = $this->adMagModel->fetchRows($sql);
			$this->assign('datas',$datas);
			$this->display('adminMag/index.html');
		}

		public function addAction(){
			
			//上传头像
			$upFileTool = M('UploadFileTool');
			$img = $upFileTool->upFile($_FILES['img'],true);

			$acc = protectStr($_POST['acc']);
			$sql = "select id from ly_admin where acc='{$acc}'";
			$isExist = $this->adMagModel->fetchRow($sql);
			if (!empty($isExist)) {
				$this->refresh('账号已经存在',$this->url);
			}
			
			$pwd = md5($_POST['pwd']);
			$nickname = protectStr($_POST['nickname']);
			$regtime = time();
			$sql = "insert into {$this->adMagModel->tbName} values (null,'{$acc}','$pwd','{$nickname}',{$regtime},'{$img}')";
			$re = $this->adMagModel->setData($sql);
			
			$this->crudFresh('add',$re,$this->url);
		}

		#编辑页
		public function editAction(){
			$method = $_SERVER['REQUEST_METHOD'];
			
			$id = $_REQUEST['id'];

			$sql = "select id,nickname,img from {$this->adMagModel->tbName} where id={$id}";
			$data = $this->adMagModel->fetchRow($sql);
			$this->assign('data',$data);
			@session_start();
			

			if (strtoupper($method) == 'POST') {
				$img = '';
				//上传头像
				if (!empty($_FILES['img']['name'])) {
					$upFileTool = M('UploadFileTool');
					$img = $upFileTool->upFile($_FILES['img'],true);
				}
				

				$id = $_POST['id'];
				$nickname = protectStr($_POST['nickname']);
				
				$set = "nickname='{$nickname}'";
				if ($_POST['pwd']!='') {
					$set .= ",pwd='".md5($_POST['pwd'])."'";
					//如果密码修改了 并且修改的管理员当前是登录状态,要登出
					if ($_SESSION['admin']['id']==$id) {
						$this->url = C('url.main').'?m=admin&c=admin&a=logoutHandler';
					}
					
				}
				if ($img != '') {
					$set .= ",img='{$img}'";
				}
				$sql = "update {$this->adMagModel->tbName} set {$set} where id={$id}";
				
				$re = $this->adMagModel->setData($sql);
				
				$this->crudFresh('edit',$re,$this->url);
			}
			$this->display('adminMag/edit.html');
		}

		#删除
		public function delAction(){
			$id = $_GET['id'];
			
			$sql = "delete from {$this->adMagModel->tbName} where id={$id}";

			$re = $this->adMagModel->setData($sql);
			
			$this->crudFresh('del',$re,$this->url);
			
		}
	}
?>