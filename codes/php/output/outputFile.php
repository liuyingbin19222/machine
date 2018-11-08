<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$fileName = $_POST['fileName'];
	$sql = "select * from '$fileName'";
	$re = mysql_query($sql);
	$row = mysql_fetch_row($re);
	if(mysql_num_rows($re) == 0){
		array_push($data, [
			"code" => -1,
			"msg" => "无此纪录"
		]);
	}else {
		array_push($data, [
			"code" => 0,
			"msg" => $row
		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);












