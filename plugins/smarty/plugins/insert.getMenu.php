<?php
	
	//获取菜单
	function smarty_insert_getMenu(){
		$catModel = M('CategoryModel');
		$sql = "select * from {$catModel->tbName} where parent_id=0 order by sort";
		
		$menus = $catModel->fetchRows($sql);
		
		$str = '';
		foreach ($menus as $menu) {

			$href = C('url.main')."?a=subPage&cat={$menu['slug']}&id={$menu['id']}";
			// echo $href;
			$str .= "<li><a class='bi' href='{$href}'>{$menu['name']}<span>{$menu['name']}</span></a></li>";
		}
		return $str;
		
	}

?>