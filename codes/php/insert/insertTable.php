<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$fileName = $_POST['fileName'];
	$sql = "create table '$fileName' ('$fileName' longtext not null)";
	$re = mysql_query($sql);
	if($re) {
		array_push($data, [
			"code" => 0,
			"msg" => "添加成功"
		]);
	}else {
		array_push($data, [
			"code" => -1,
			"msg" => "添加失败"

		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);










