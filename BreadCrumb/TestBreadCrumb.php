<?php
	include("BreadCrumb.class.php");

	$bc = new  BreadCrumb();

	$ary = array( 
			'百度'=>'http://www.baidu.com',
			'新浪'=>'http://www.sina.com',
			'淘宝'=>'http://www.taobao.com',
			'当前页'=>false
	);
	$bc->setDeliClass('deli-class');
	$bcStr = $bc->build( $ary );

	include("template.html"); 