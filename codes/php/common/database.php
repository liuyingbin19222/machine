<?php 
 	// header("Content-Type: text/json;charset=utf-8");
	header("content-type:application/json;charset=utf-8");
 	$re =  mysql_connect("localhost","root","123456");
 	mysql_select_db("machine",$re) or die("数据库访问错误".mysql_error());
 	mysql_query("set names utf-8"); 
 if(!$re) {
 	die('Could not connect: ' . mysql_error());
 }



 
 





