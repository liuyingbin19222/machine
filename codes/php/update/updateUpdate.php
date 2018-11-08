<?php

//更新数据表;
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$fileName = $_POST['fileName'];
	$content = $_POST['content'];
	$data = [];
	$sql = "INSERT INTO table '$fileName' values ('$content')";
	$re =  mysql_query($sql);
	if($re){
		array_push($data, [
			"code" => 0,
			"msg" => "更新成功"
		]);
	}else {
		array_push($data, [
			"code" => -1,
			"msg" => "更新失败"
		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);








