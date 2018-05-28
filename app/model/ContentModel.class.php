<?php
	namespace model;
	use \core\Model;

	class ContentModel extends Model{
		public $tbName = 'ly_content';

		public function getDatasBySlug($slug){
			$catModel = M('CategoryModel');
			$cTb = $catModel->tbName;
			
			
			$sql = "select id,name from {$cTb} where parent_id=(select id from {$cTb} where slug='{$slug}' limit 1) order by sort";
			
			$cats = $catModel->fetchRows($sql);
			
			$datas = [];
			
			foreach ($cats as $cat) {
				$sql = "select te.id,te.title,te.intro,te.price,te.cover,te.grade from {$this->tbName} as te join {$cTb} as c on te.cat_id=c.id where te.cat_id={$cat['id']} and status=1";
				
				$data = $this->fetchRows($sql);
				if (!empty($data)) {
					$datas[$cat['name']] = $data;
				}
			}
			return $datas;

		}	
	}

?>