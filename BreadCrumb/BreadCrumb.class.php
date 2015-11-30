<?php
class BreadCrumb{
		private $delimiter;					//分隔符
		private $whiteSpace;				//HTML空白实体
		private $marginTimes;			//分隔符与导航文本之间的间距倍数
		private $linkClass;					//文本链接的css类
		private $deliClass;					//分隔符的css类

		public function __construct( $_initAry ){
				$this->whiteSpace = isset($_initAry['whiteSpace']) ? $_initAry['whiteSpace'] : '&nbsp;';
				$this->delimiter = isset($_initAry['delimeter']) ? $_initAry['delimiter'] : '>>';
				$this->marginTimes = isset( $_initAry['marginTimes'] ) ? $_initAry['marginTimes'] : 1 ;
				$this->
		}//func

		public function setDeliClass( $_class ){
				$this->deliClass = $_class;
		}//func

		public function setLinkClass( $_class ){
				$this->linkClass = $_class;
		}//func

		public function setDelimiter( $_deli ){
				$this->delimiter = $_deli;
		}//func

		public function build( $_elements ){
				
				$bcStr = '<div class="bread-crumb-wrap">';
				$blankStr = str_repeat($this->whiteSpace, $this->marginTimes);

				$linkAry = array();
				$deliClass = empty($this->deliClass) ? "" : " class='{$this->deliClass}' ";
				$linkClass = empty($this->linkClass) ? "" : " class='{$this->linkClass}' ";
				//构造分隔符结构
				$deliStr = "{$blankStr}<span $deliClass>{$this->delimiter}</span>{$blankStr}";		
				
				foreach( $_elements as $text => $url ){
						$hrefStr = ( !$url ) ? "" : "href='$url'";	
						$linkAry[] = "<a {$hrefStr}>{$text}</a>";
				}//foreach
				
				$bcStr .= (implode($deliStr, $linkAry)) . '</div>';
				
				return $bcStr;
		}//func
		
}//class