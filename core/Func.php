<?php
	/*
	* 辅助函数
	*/
	
	/*
	* 获取配置信息
	* $string string 例子:C('db.type')
	*/
	function C($string){
		$arr = explode('.', $string);
		$target = $GLOBALS['config'];
		foreach ($arr as $value) {
			$target = $target[$value];
		}
		return $target;
	}

	/*
	* 获取全局变量
	* $string string 例子:G('config')
	*/
	function G($string){
		return $GLOBALS[$string];
	}

	/*
	* 分页
	*/
	function page($pageNow,$pageTotal,$url){
		if ($pageTotal==0 || $pageTotal==1) {
			return '';
		}
		$lastOnePage = $pageNow-1; //上一页
		$lastTwoPage = $pageNow-2; //上两页
		$nextOnePage = $pageNow+1; //下一页
		$nextTwoPage = $pageNow+2; //下两页
		$left = $right = '';

		//左半部分
		if ($pageNow == 1) {
			$left .= "<li><a href='{$url}={$pageNow}' class='current'>$pageNow</a></li>";
		}elseif ($lastOnePage == 1) {
			$left .= "<li><a href='{$url}={$lastOnePage}'>上一页</a></li>
			<li><a href='{$url}={$lastOnePage}'>$lastOnePage</a></li>
			<li><a href='{$url}={$pageNow}' class='current'>$pageNow</a></li>";
		}elseif ($lastTwoPage == 1) {
			$left .= "<li><a href='{$url}={$lastOnePage}'>上一页</a></li>
			<li><a href='{$url}={$lastTwoPage}'>$lastTwoPage</a></li>
			<li><a href='{$url}={$lastOnePage}'>$lastOnePage</a></li>
			<li><a href='{$url}={$pageNow}' class='current'>$pageNow</a></li>";
		}else{
			$left .= "<li><a href='{$url}={$lastOnePage}'>上一页</a></li>
			<li><span>...</span>
			<li><a href='{$url}={$lastTwoPage}'>$lastTwoPage</a></li>
			<li><a href='{$url}={$lastOnePage}'>$lastOnePage</a></li>
			<li><a href='{$url}={$pageNow}' class='current'>$pageNow</a></li>";			
		}
		//右半部分
		if ($pageNow == $pageTotal) {
			$right .= "";
		}elseif ($nextOnePage == $pageTotal) {
			$right .= "
			<li><a href='{$url}={$nextOnePage}'>$nextOnePage</a></li>
			<li><a href='{$url}={$nextOnePage}'>下一页</a></li>";
		}elseif ($nextTwoPage == $pageTotal) {
			$right .= "
			<li><a href='{$url}={$nextOnePage}'>$nextOnePage</a></li>
			<li><a href='{$url}={$nextTwoPage}'>$nextTwoPage</a></li>
			<li><a href='{$url}={$nextOnePage}'>下一页</a></li>";
		}else{
			$right .= "
			<li><a href='{$url}={$nextOnePage}'>$nextOnePage</a></li>
			<li><a href='{$url}={$nextTwoPage}'>$nextTwoPage</a></li>
			<li><span>...</span></li>
			<li><a href='{$url}={$nextOnePage}'>下一页</a></li>";		
		}

		return $html = $left.$right;
	}

	//生成分类选项
	function generateSelect($datas,$parent_id=0,$field='parent_id'){
		$str = "<select class='form-control' id='form-field-select-1' name='{$field}'>
          <option value='0'>--选择所属分类--</option>";
       $option = '';
       
       foreach ($datas as $k =>$value) {
       		$selected = '';
       		if ($value['id'] == $parent_id) {
       			$selected = 'selected';
       		}
       		$option .= '<option '.$selected.' value='.$value['id'].'>'.str_repeat("-- ", $value['space']).$value['name'].'</option>';
       }
       return $str .$option.'</select>';
	}

	//防止xss攻击和sql注入
	function protectStr($str){
		return htmlspecialchars(addslashes(trim($str)));
	}	

	//实例化单例对象
	function M($className){
		
		$class = basename($className);
		if (substr($class, -5) == 'Model') {//模型类

			$obj = \core\App::M('\\model\\'.$class);

		}elseif (substr($class, -4) == 'Tool') {//工具类
			$obj = \core\App::M('\\plugins\\'.$class);
		}

		return $obj;
	}
?>