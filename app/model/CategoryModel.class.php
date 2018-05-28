<?php
	namespace model;
	use \core\Model;
	class CategoryModel extends Model{
		public $tbName = 'ly_cat';


		public function getCats(){
			$sql = "select * from {$this->tbName} where 1 order by id desc";
			$cats = $this->fetchRows($sql);
			$tree = [];
			$this->recursiveCat($tree,$cats);
			return $tree;
		}

		//递归整理分离层级关系
		protected function recursiveCat(&$tree,$cats,$parent_id=0,$space=0)
		{
			foreach ($cats as $cat) {
				if ($cat['parent_id'] == $parent_id) {
					$cat['space'] = $space;
					$tree[] = $cat;
					$this->recursiveCat($tree,$cats,$cat['id'],$space+1);
				}
			}
		}
	
	}

?>