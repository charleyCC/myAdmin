<?php
	/*
	* 文件上传
	*/
	namespace plugins;
	class UploadFileTool{
		/*
		* $file array 
		* $file = [
		*   'name' => '原文件名'
		*   'type' => '文件类型'
		*   'tmp_name' => '临时存放文件的全路径'
		*   'size' => '文件大小'
		*   'error' => '系统错误码'
		* ];
		*/
		public function upFile($file,$isYs=false){
			//处理系统错误
			$this->checkSystemErr($file['error']);
			//处理逻辑错误
			$this->checkLoginErr($file['type'],$file['size']);
			//文件后缀
			$fileFix = strrchr($file['name'], '.');
			//生成唯一文件名
			$fileName = uniqid('img_').date('YmdHis').mt_rand(1000,9999).$fileFix;
			//从临时目录转移文件到指定的上传目录中
			$filePath = C('upF.path').$fileName;
			if (move_uploaded_file($file['tmp_name'], $filePath)) {
				if ($isYs) {
					$this->resampleImg($filePath);
				}
				
				return $fileName;
			}else{
				die('上传失败');
			}
		}

		//处理系统错误
		private function checkSystemErr($error){
			switch ($error) {
		        case 1:
		            die('文件的大小超过了服务器的限定'); 
		        case 2:
		            die('文件的大小超过了浏览器的限定'); 
		        case 3:
		            die('文件没有上传完毕'); 
		        case 4:
		            die('没有选择上传的文件'); 
		        case 6:
	            case 7:
	                die('服务器出现错误，导致上传失败');
			}
		}

		//处理逻辑错误
		private function checkLoginErr($type,$size){
			if (!in_array($type, C('upF.limitType'))) {
				die('不支持上传该文件类型');
			}
			if ($size > C('upF.limitSize')) {
				die('文件过大');
			}
		}


		//等比例缩略图,只支持压缩jpg和png格式的图片
		private function resampleImg($oriImg){

			//原图
			$src = imagecreatefromjpeg($oriImg);
			$src_w = imagesx($src);
			$src_h = imagesy($src);

			//限定区域大小
			$max_w = 80;
			$max_h = 80;

			$src_bili = $src_w/$src_h; //原始图片宽高比例

			if ($src_w < $max_w && $src_h < $max_h) {
				$w = $src_w;
				$h = $src_h;
			}else{
				if ($src_w/$src_h > $max_w/$max_h) {
					//设定缩略图的宽为限定区域最大宽度
					$w = $max_w;
					$h = $w/$src_bili;
				}else{
					//设定缩略图的高为限定区域最大高度
					$h = $max_h;
					$w = $h*$src_bili;
				}
			}

			//画布
			$dst = imagecreatetruecolor($w, $h);


			//等比例缩小
			imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $src_w, $src_h);


			imagejpeg($dst,$oriImg);
			//销毁资源
			imagedestroy($dst);
			imagedestroy($src);
		}
	}

?>