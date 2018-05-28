<?php
namespace admin\controller;
use \core\Controller;
class QuestionController extends Controller{
	#列表分类表的
	public function  indexAction(){
		$questionModel = M('QuestionModel');
		$sql = 'select * from ly_faq_cat where 1';
		$datas = $questionModel->fetchRows($sql);
		$this-> assign('datas',$datas);

		$this->display('question\index.html');

	}
	#列表问题页.
	public function  indexAction1(){
		$questionModel = M('QuestionModel');


		//分页$pageNow,$pageTotal,$url
		$pageNow = isset($_GET['page']) ? $_GET['page'] : 1; //当前页
		$numPerpage = 6; //每页显示6条
		$sql = 'select count(*) as num from ly_faq where 1';//查询有多少数据
		$row = $questionModel->fetchRow($sql);
		$pageTotal = (int)ceil($row['num']/$numPerpage); //总页数
		$url = C('url.main').'/?m=admin&c=question&a=indexAction1&page';
		$htmlpage = page($pageNow,$pageTotal,$url);//调用分页方法

		$this-> assign('num',$row['num']);

		$this->assign('htmlpage',$htmlpage);


		$x = ($pageNow-1)*$numPerpage;//偏移量
		$firstRowNum = ($pageNow-1)*$numPerpage+1; //当前页的第一条数据的序号
		$this->assign('firstRowNum',$firstRowNum);


		$sql = "select * from ly_faq where 1  limit {$x},{$numPerpage}";
		$datas = $questionModel->fetchRows($sql);
	
		$this-> assign('data',$datas);
		$this->display('question\index1.html');

	}
	//新增问题分类
    public  function  addAction(){

    	$this->display('question\add.html');

    }
    //处理
    public function addHanlder(){
    	$sort = $_POST['sort'];
    	$name = $_POST['name'];
    	$questionModel = M('QuestionModel');
    	$sql = "insert into ly_faq_cat values (null,'{$name}',{$sort})"; 
    	$re = $questionModel->setData($sql);
    	if($re){
    		echo '新增成功';
    	}else{
    		echo '新增失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction';
    	header('Refresh:2;url='.$url);
    	exit;
    }
    public function editAction(){
    	$id = $_GET['id'];
    	$questionModel = M('QuestionModel');
    	$sql = "select * from ly_faq_cat where id = {$id}";
    	$data = $questionModel->fetchRow($sql);
		$this-> assign('data',$data);

		$this->display('question\edit.html');
    }
    public function editHandler(){
    	$sort = $_POST['sort'];
    	$name = $_POST['name'];
    	$id = $_POST['id'];
    	$questionModel = M('QuestionModel');
    	$sql = "update ly_faq_cat set id={$id},name='{$name}',sort={$sort} where id = {$id}";
    	$re = $questionModel->setData($sql);
    	if($re){
    		echo '新增成功';
    	}else{
    		echo '新增失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction';
    	header('Refresh:2;url='.$url);
    	exit;
    }
#删除操作
		public function delAction(){
			$id = $_GET['id'];
			$questionModel = M('QuestionModel');
			$sql = "delete from ly_faq_cat where id={$id}";
			$re = $questionModel->setData($sql);
			if($re){
    		echo '删除成功';
    	}else{
    		echo '删除失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction';
    	header('Refresh:2;url='.$url);
    	exit;
    }






    	//新增问题的问题回答
    public  function  addAction1(){

    	$this->display('question\add1.html');

    }
    //处理
    public function addHanlder1(){
    	$question = $_POST['question'];
    	$answer = $_POST['answer'];
    	$cat_id = $_POST['cat_id'];
    	$questionModel = M('QuestionModel');
    	$sql = "insert into ly_faq values (null,'{$question}','{$answer}',{$cat_id})"; 
    	$re = $questionModel->setData($sql);
    	if($re){
    		echo '新增成功';
    	}else{
    		echo '新增失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction1';
    	header('Refresh:2;url='.$url);
    	exit;
    }
    public function editAction1(){
    	$id = $_GET['id'];
    	$questionModel = M('QuestionModel');
    	$sql = "select * from ly_faq where id = {$id}";
    	$data = $questionModel->fetchRow($sql);
		$this-> assign('data',$data);
		$this->display('question\edit1.html');
    }
    public function editHandler1(){
    	$question = $_POST['question'];
    	$answer = $_POST['answer'];
    	$id = $_POST['id'];
    	$cat_id = $_POST['cat_id'];
    	$questionModel = M('QuestionModel');
    	$sql = "update ly_faq set id={$id},question='{$question}',answer='{$answer}',cat_id={$cat_id}  where id = {$id}";
    	$re = $questionModel->setData($sql);
    	if($re){
    		echo '新增成功';
    	}else{
    		echo '新增失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction1';
    	header('Refresh:2;url='.$url);
    	exit;
    }
#删除操作
		public function delAction1(){
			$id = $_GET['id'];
			$questionModel = M('QuestionModel');
			$sql = "delete from ly_faq where id={$id}";
			$re = $questionModel->setData($sql);
			if($re){
    		echo '删除成功';
    	}else{
    		echo '删除失败';
    	}
    	$url = C('url.main').'/?m=admin&c=question&a=indexAction1';
    	header('Refresh:2;url='.$url);
    	exit;
    }
		

}