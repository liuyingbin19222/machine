<?php 
	header('Access-Control-Allow-Origin:*');
	header("content-type:application/json;charset=utf-8");  
	require('../common/database.php');
	$data = [];
	$user = trim($_POST['username']);
	$password = trim($_POST['password']);
	echo json_encode($user);
	exit();
	$sql_user = "SELECT * FROM admin WHERE name = '$user'";
	if( mysql_num_rows(mysql_query($sql_user)) == 0){
		array_push($data, [
			"code" => -2,
			"msg" => "用户不存在",
			"mysql_query" => mysql_query($sql_user)
		]);
	}else{
		$sql = " SELECT * from admin WHERE name = '$user' and password = '$password'";
		$re = mysql_query($sql);
		$test1 = count(mysql_num_rows($re));
		$test2 = mysql_num_rows($re);
		if(mysql_num_rows($re) >= 1){
			array_push($data,[
				// "bool" => "$re",
				// "num" => "$test2",
				// "user" => "$user",
				// "password" => "$password",
				"code" => 0,
				"msg" => "登陆成功"
			]);
		}else {
			array_push($data, [
				"code" => -1,
				"msg" => "密码不正确"
			]);
		}
	}
	echo json_encode($user);
	echo " $password";
	echo json_encode($data,JSON_UNESCAPED_UNICODE);


