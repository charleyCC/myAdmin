<?php
	namespace admin\controller;
	use \core\Controller;
	
	class CategoryController extends Controller{
		private $indexParams = '?m=admin&c=category&a=indexAction';
		private $catModel;

		public function __construct(){
			parent::__construct();
			$this->catModel = M('CategoryModel');
		}

		#列表页
		public function indexAction(){
			
			$tree = $this->catModel->getCats();
			$this->assign('datas',$tree);
			$this->display('Category/index.html');
		}

		#添加页
		public function addAction(){
			$tree = $this->catModel->getCats();
			$this->assign('datas',$tree);
			$this->display('Category/add.html');
		}
		//添加处理
		public function addHanlder(){

			$url = C('url.main').$this->indexParams;

			$slug = protectStr($_POST['slug']); 
			$sql = "select id from {$this->catModel->tbName} where slug='{$slug}'";
			$isExist = $this->catModel->fetchRow($sql);
			if (!empty($isExist)) {
				$this->refresh('唯一标识已经存在',$url);
			}
			$name = protectStr($_POST['name']);
			$parent_id = $_POST['parent_id'];
			$sort = protectStr($_POST['sort']);
			
			$sql = "insert into {$this->catModel->tbName} values (null,'{$name}',{$parent_id},{$sort},'$slug')";
			
			$re = $this->catModel->setData($sql);


			
			if ($re) {
				$this->refresh('添加成功',$url);	
			}else{
				$this->refresh('添加失败,请检查.',$url);	
			}
		}

		#编辑页
		public function editAction(){
			$id = $_GET['id'];

			$sql = "select * from {$this->catModel->tbName} where id={$id}";
			$data = $this->catModel->fetchRow($sql);
			$tree = $this->catModel->getCats();
			$this->assign('tree',$tree);
			$this->assign('data',$data);
			$this->display('Category/edit.html');
		}

		//编辑处理
		public function editHandler(){
			$id = $_POST['id']; 
			$slug = protectStr($_POST['slug']); 
			$name = protectStr($_POST['name']);  
			$parent_id = $_POST['parent_id']; 
			$sort = protectStr($_POST['sort']); 
			
			
			$sql = "update {$this->catModel->tbName} set name='{$name}',parent_id={$parent_id},sort={$sort},slug='{$slug}' where id={$id}";
			
			$re = $this->catModel->setData($sql);
			$url = C('url.main').$this->indexParams;
			if ($re) {
				$this->refresh('编辑成功',$url);	
			}else{
				$this->refresh('编辑失败,请检查.',$url);	
			}	
		}

		#删除操作
		public function delAction(){
			$id = $_GET['id'];
			
			$sql = "select id from {$this->catModel->tbName} where parent_id={$id}";
			$datas = $this->catModel->fetchRows($sql);
			$url = C('url.main').$this->indexParams;
			if (!empty($datas)) {
				//有子分类,不能删除
				$this->refresh('该分类有子分类,不能删除,若要删除,请先删除子分类',$url);
			}
		
			$sql = "delete from {$this->catModel->tbName} where id={$id}";

			$re = $this->catModel->setData($sql);
			
			$this->crudFresh('del',$re,$url);
			
		}
	}

?>