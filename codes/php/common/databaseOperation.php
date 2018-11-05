<?php
	require("database.php");
	//获取表内的符合条件的所有数据,实现查询;
	function get($table,$label = "",$value=""){
		$re =  mysql_connect("localhost","root","123456");
	 	mysql_select_db("machine",$re) or die("数据库访问错误".mysql_error());
	 	mysql_query("set names utf-8"); 
	 	$data = [];
		 if(!$re) {
		 	die('Could not connect: ' . mysql_error());
		 }else {

		 }
		$statement = "";
		if($label == "" && $value == ""){
			$statement = "SELECT * FROM $table";
		}else {
			$statement = "SELECT * FROM $table WHERE $label = '$value'";
		}
		$result = mysql_query($statement);
		if(mysql_num_rows($result) == 0) {
			
		}else {
			while($row = mysql_fetch_rows($result)){
				array_push($data, $row);
				echo $row;
			}
		}
		echo $data;
		return $data;
	}


