<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$fileName = $_POST["fileName"];
	$sql = "create new table '$fileName' ('$fileName' longtext not null)";
	$re = mysql_query($sql);
	if($re){
		array_push($data, [
			"code" => 0,
			"msg" => "创建成功"
 		]);
	}else {
		array_push($data, [
			"code" => -1,
			"msg" => "创建失败"
		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);





