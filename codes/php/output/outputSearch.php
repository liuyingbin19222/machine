<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$id = $_POST['id'];
	$sql = "select id from machinecomponent where id = '$id'";
	$re = mysql_query($sql);
	$count = mysql_num_rows($re);
	if($count == 0){
		array_push($data,[
			"code" => -1,
			"msg" => "未找到此零件编号"
		]);
	}else {
		$sql = "select name from machinecomponent where id = '$id'";
		$re =  mysql_query($sql);
		$row = mysql_fetch_row($re);
		array_push($data, [
			"code" => 0,
			"msg" => $row[0]
		]);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);



















