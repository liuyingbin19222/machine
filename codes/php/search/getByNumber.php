<?php
	header("Content-Type: text/json;charset=utf-8");
	require('../common/databaseOperation.php');
	$moduleId = trim($_POST["moduleId"]);
	$data = [];           //Select 语句返回 bool;
	// $dataGet = get("machinecomponent","name",$name);
	// get("machinecomponent","name",$name);
	$sql = "SELECT * FROM machinecomponent WHERE id = '$moduleId'";
	$re = mysql_query($sql);
	$count = mysql_num_rows($re);
	if($count == 0){
		array_push($data, [
			"con" => $count,
			"code" => -1,
			"msg" => "不存在此模块编码"
		]);
	}else {
		$row1 = [];
		while($row = mysql_fetch_array($re)){
			// array_push($row1,$row);
			array_push($data, [
				"id" => "$row[0]",
				"name" => "$row[1]",
				"moduleName" => "$row[2]",
				"productComponent" => "$row[3]"
			]);
		}	
	}

	echo json_encode($data,JSON_UNESCAPED_UNICODE);

















