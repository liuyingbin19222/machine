<?php
	include("database.php");
	//获取表内的符合条件的所有数据,实现查询;
	function get($table,$label = "",$value=""){
		$statement = "";
		if($label == "" && $value == ""){
			$statement = "SELECT * FROM $table";
		}else {
			$statement = "SELECT * FROM $table WHERE $label = '$value'";
		}
		$result = $con -> query($statement);
		if($result -> num_rows <= 0) {
			return [];
		}
		$data = [];
		while($row = $result -> fetch_assoc()){
			array_push($data, $row);
		}
		return $data;
	}


