<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$data = [];
	$fileName = trim($_POST['fileName']);
	$myfile = fopen($fileName, "r") or die("can not open file");
	if($myfile == NULL) {
		array_push($data,[
			"code" => -1,
			"msg" => "can not open file"
		]);
	}else {
		fread($myfile, filesize($fileName));
		array_push($data, [
			"code" => 0,
			"msg" => fread($myfile, filesize($fileName));
		]);
	}
	fclose($myfile);
	echo json_encode($data,JSON_UNESCAPED_UNICODE);
	








