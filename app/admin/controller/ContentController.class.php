<?php
	namespace admin\controller;
	use \core\Controller;

	class ContentController extends Controller{
		private $conModel;
		private $url;
		private $default_val;
		private $tree;
		public function __construct(){
			parent::__construct();
			$this->conModel = M('ContentModel');
			$this->url = C('url.main').'?m=admin&c=content&a=indexAction';
			$this->default_val = [
				'sort', 'grade', 'price', 'tab_cat', 'visit_num', 'booking_num'
			];
			$this->tree = M('CategoryModel')->getCats();
		}

		public function indexAction(){

			$condition = ' 1';
			$s_title = !empty($_REQUEST['s_title']) ? protectStr($_REQUEST['s_title']) : '';

			$s_cat_id = !empty($_REQUEST['s_cat_id']) ? $_REQUEST['s_cat_id'] : 0;
			

			if ($s_title) {
				$condition .= " and a.title like '%{$s_title}%'";
			}
			if ($s_cat_id) {

				$condition .= " and a.cat_id = {$s_cat_id}";
			}
			$this->assign('s_title',$s_title);
			$this->assign('s_cat_id',$s_cat_id);
			$this->assign('tree',$this->tree);	

			$table = $this->conModel->tbName;
			
			//分页
			$perPageNum = 10;//每页显示记录数
			$pageNow = isset($_GET['page']) ? $_GET['page'] : 1; //当前页

			$sql = "select count(a.id) as num from {$table} as a join ly_cat as c on a.cat_id=c.id where $condition";

			$num = $this->conModel->fetchRow($sql)['num'];//总记录数
			$pageTotal = (int)ceil($num/$perPageNum);//总页数
			$url = $this->url."&s_title={$s_title}&s_cat_id={$s_cat_id}&page";
			$pageHtml = page($pageNow,$pageTotal,$url);
			$this->assign('pageHtml',$pageHtml);
			$this->assign('num',$num);

			$firstRowNum = ($pageNow-1)*$perPageNum+1;//第一条记录的序号
			$this->assign('firstRowNum',$firstRowNum);
			
			$start = ($pageNow-1)*$perPageNum;//每页偏移值

			//表数据
			$sql = "select a.id,a.sort,a.title,a.cover,a.grade,a.price,a.add_time,a.status,c.name as c_name from {$table} as a join ly_cat as c on a.cat_id=c.id where {$condition} order by add_time desc limit {$start}, {$perPageNum}";
			$datas = $this->conModel->fetchRows($sql);
			$this->assign('datas',$datas);
 			
 			
			$this->display('Content/index.html');
		}

		public function addAction(){

			$method = $_SERVER['REQUEST_METHOD'];

			
			$this->assign('tree',$this->tree);

			if (strtoupper($method) == 'POST') {
				
				$val = '';
				foreach ($_POST as $k=>$v) {
					if ($v=='' && in_array($k, $this->default_val)) {
						$v = 0;
					}
					$v = protectStr($v);					
					$val .= "'{$v}', ";					
				}
				//接收表单传值
	        	$cover = '';

	        	if (!empty($_FILES['cover']['name'])) {
	        		//调用上传模型
	        		$UploadFileTool = M('UploadFileTool'); 
	        		$cover = $UploadFileTool->upFile($_FILES['cover']);	        		
	        	}
	        	$val .= "'{$cover}', ";
	        	
	        	
				$addTime = time();
				$val .= "{$addTime}";
	        
	        	
	        	//调用模型放入数据中	        	
	      		$sql = "insert into {$this->conModel->tbName} (cat_id,title,status,sort,grade,price,tab_cat,visit_num,booking_num,score,intro,content,cover,add_time,id) values({$val} ,null)";

	      		$re = $this->conModel->setData($sql);
	      		$this->crudFresh('add',$re,$this->url);
			}

			$this->display('Content/add.html');
			
		}

		#更改状态
		public function changeStatus(){
			$id = $_POST['id'];
			$status = $_POST['status'];

			$sql = "update {$this->conModel->tbName} set status={$status} where id={$id}";
			$re = $this->conModel->setData($sql);
			if ($re) {
				echo "更新状态成功";
			}else{
				echo "更新状态失败";
			}
		}

		#编辑页
		public function editAction(){
			$method = $_SERVER['REQUEST_METHOD'];
			
			$id = $_REQUEST['id'];

			
			$this->assign('tree',$this->tree);

			$sql = "select * from {$this->conModel->tbName} where id={$id}";
			$data = $this->conModel->fetchRow($sql);
			$this->assign('data',$data);

			if (strtoupper($method) == 'POST') {
				if (strtoupper($method) == 'POST') {
				
				$set = '';
				foreach ($_POST as $k=>$v) {
					$v = protectStr($v);					
					$set .= "{$k}='{$v}', ";	
				}

				//接收表单传值
	        	$cover = $data['cover'];

	        	if (!empty($_FILES['cover']['name'])) {
	        		//调用上传模型
	        		$UploadFileTool = M('UploadFileTool'); 
	        		$cover = $UploadFileTool->upFile($_FILES['cover']);	        		
	        	}
	        	$set .= "cover='{$cover}' ";
	        	        	
	        	//调用模型放入数据中	        	
	      		$sql = "update {$this->conModel->tbName} set {$set} where id={$id}";	

	      		$re = $this->conModel->setData($sql);
	      		$this->crudFresh('edit',$re,$this->url);
			}
			}
			$this->display('Content/edit.html');
		}



		#删除
		public function delAction(){
			
			$id = $_POST['id'];
			
			$sql = "delete from {$this->conModel->tbName} where id={$id}";

			$re = $this->conModel->setData($sql);

			if ($re) {
				echo "删除成功";
			}else{
				echo "删除失败";
			}
			
		}
	}

?>