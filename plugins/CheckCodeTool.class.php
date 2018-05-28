<?php
	namespace plugins;
	
	class CheckCodeTool{

		private $_w;//画布宽度
		private $_h;//画布高度
		private $_image;//画布资源
		private $_fontfile;//字体文件

		public function __construct(){
			$this->_w = C('checkCode.w');
			$this->_h = C('checkCode.h');
			$this->_fontfile = C('checkCode.fontFile');
			//创建画布
			$this->createImg();
			//填充背景色
			$this->bgFill();
			//写字
			$this->writeStr(4);
			//设置干扰点
			$this->setPoint(60);
			//设置干扰线
			$this->setLine(3);
			//设置干扰弧线
			$this->setArc(2);
		}

		//创建画布
		private function createImg(){

			$this->_image = imagecreatetruecolor($this->_w,$this->_h);
		}

		//填充背景色
		private function bgFill(){
			$color = $this->getColor();
			imagefill($this->_image, 0, 0, $color);
		}

		//写字
		private function writeStr($num){
			//随机生成指定的字符串
			$str = array_merge(range(0, 9),range('a', 'z'),range('A', 'Z'));
			$str = str_shuffle(implode('',$str));
			$str = substr($str,0,$num);
			$color = $this->getColor();

			imagettftext($this->_image,25, 0, $this->_w/9, $this->_h*4/5, $color, $this->_fontfile, $str);
			
			//保存验证码到session
			@session_start();//@抑制可能前面开启过session
			$_SESSION['checkCode'] = $str;
		}

		//干扰点
		private function setPoint($num){
			for ($i=0; $i <$num ; $i++) { 
				$color = $this->getColor();
				$sx = mt_rand(1,$this->_w-1);
				$sy = mt_rand(1,$this->_h-1);
				$ex = mt_rand($sx-2,$sx+2);
				$ey = mt_rand($sy-2,$sy+2);
				imageline($this->_image, $sx, $sy, $ex, $ey, $color);
			}
		}

		//干扰线
		private function setLine($num){
			for ($i=0; $i < $num; $i++) { 
				$color = $this->getColor();
				$sx = mt_rand($this->_w/4,$this->_w/2);
				$sy = mt_rand(1,$this->_h-1);
				$ex = mt_rand($this->_w/2,$this->_w*3/4);
				$ey = mt_rand(1,$this->_h-1);
				imageline($this->_image, $sx, $sy, $ex, $ey, $color);
			}
		}

		//干扰弧线
		private function setArc($num){
			for ($i=0; $i < $num; $i++) { 
				$color = $this->getColor();
				$cx = mt_rand($this->_w/4,$this->_w*3/4);
				$cy = mt_rand($this->_h/4,$this->_h*3/4);
				$w = mt_rand(1,$this->_w);
				$h = mt_rand(1,$this->_h);
				$start = mt_rand(0,120);
				$end = mt_rand(250,350);
				imagearc($this->_image, $cx, $cy, $w, $h, $start, $end, $color);
			}			
		}

		//输出验证码
		public function output($type = 0,$path="F:/mywamp/apache24/htdocs/php30/day18/"){
			
			if ($type === 0) {
				header("Content-type:image/png");
				imagepng($this->_image);
			}else{
				imagepng($this->_image,$path."CheckCode.jpg");
			}
			
		}

		//析构方法 关闭资源
		public function __destruct(){
			imagedestroy($this->_image);
		}

		//随机获取或者指定颜色
		private function getColor($r='',$g='',$b=''){
			$r = $r==='' ? mt_rand(0,255) : $r;
			$g = $g==='' ? mt_rand(0,255) : $g;
			$b = $b==='' ? mt_rand(0,255) : $b;
			return imagecolorallocate($this->_image, $r, $g, $b);
		}
	}




?>