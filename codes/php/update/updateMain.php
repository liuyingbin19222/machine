<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$moduleName = $_POST['moduleName'];
	$productcomponent = $_POST['productcomponent'];

	$sql = "INSERT INTO table machinecomponent VALUES ('$id','$name','$moduleName','$productcomponent')";
	$re = mysql_query($sql);
	if($re){
		array_push($data, [
			"code" => 0,
			"msg" => "插入成功"
		]);
	}else {
		array_push($data, [
			"code" => -1,
			"msg" => "插入失败"
		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);









