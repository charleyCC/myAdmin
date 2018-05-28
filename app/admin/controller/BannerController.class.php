<?php
	namespace admin\controller;
	use \core\Controller;

	class BannerController extends Controller{
		private $banModel;
		private $url;
		public function __construct(){
			parent::__construct();
			$this->banModel = M('BannerModel');
			$this->url = C('url.main').'?m=admin&c=banner&a=indexAction';
		
		}
		public function indexAction(){
			//调用模块查询数据,并回显数据
 			
 			$sql= "select * from {$this->banModel->tbName} where 1 order by add_time desc";
 			
 			$datas = $this->banModel->fetchRows($sql);
 			
 			$this->assign('datas',$datas);
	        
			$this->display('Banner/index.html');
		}

		public function addAction(){
			
			//接收表单传值
        	$img = $_FILES['img'];
        	//调用上传模型
        	$UploadFileTool = M('UploadFileTool'); 
        	$img = $UploadFileTool->upFile($img);//将获取的img对象转换为文件名


        	$title = protectStr($_POST['title']);
        	$status = $_POST['status'];
        	$sort = $_POST['sort'];
        	$addTime = time();
        	

        	//调用模型放入数据中
        	
      		$sql = "insert into {$this->banModel->tbName} values(null,'{$title}',{$sort},'{$img}',{$addTime},{$status})";
      		$re = $this->banModel->setData($sql);
      		$this->crudFresh('add',$re,$this->url);

		}

		#更改状态
		public function changeStatus(){
			$id = $_GET['id'];
			$status = $_GET['status'];

			$sql = "update {$this->banModel->tbName} set status={$status} where id={$id}";
			$re = $this->banModel->setData($sql);
			$this->crudFresh('edit',$re,$this->url);
		}

		#编辑页
		public function editAction(){
			$method = $_SERVER['REQUEST_METHOD'];
			
			$id = $_REQUEST['id'];

			$sql = "select * from {$this->banModel->tbName} where id={$id}";
			$data = $this->banModel->fetchRow($sql);
			$this->assign('data',$data);

			if (strtoupper($method) == 'POST') {
				$img = '';
				
				//上传头像
				if (!empty($_FILES['img']['name'])) {
					$upFileTool = M('UploadFileTool');
					$img = $upFileTool->upFile($_FILES['img']);
				}
				
				$id = $_POST['id'];

				$title = protectStr($_POST['title']);
	        	$status = $_POST['status'];
	        	$sort = $_POST['sort'];

	        	$set = "title='{$title}',sort={$sort},status={$status}";
	        	if ($img!='') {
	        		$set .= ",img='{$img}'";
	        	}
				
				$sql = "update {$this->banModel->tbName} set {$set} where id={$id}";
				
				$re = $this->banModel->setData($sql);
				$this->crudFresh('edit',$re,$this->url);
			}
			$this->display('Banner/edit.html');
		}



		#删除
		public function delAction(){
			$id = $_GET['id'];
			
			$sql = "delete from {$this->banModel->tbName} where id={$id}";

			$re = $this->banModel->setData($sql);
			
			$this->crudFresh('del',$re,$this->url);
			
		}
	}

?>