<?php 

include('../common/database.php')
include('../common/databaseOperation.php')
	$data = [];
	$user = $_POST['username'];
	$password = $_POST['password'];
	$sql_user = "SELECT * FROM admin WHERE username = '$user'";
	if(!mysql_query($sql_user){
		array_push($data, [
			"code" => -2,
			"msg" => "用户不存在"

		])
	})
	$sql = "SELECT password from admin WHERE username = '$user'";

	if(mysql_query($sql) == $password){
		array_push($data,[
			"code" => 0,
			"msg" => "登陆成功";
		]);
	}else {
		array_push($data, [
			"code" => -1,
			"msg" => "密码不正确"
		])
	}
	echo json_encode($data);


