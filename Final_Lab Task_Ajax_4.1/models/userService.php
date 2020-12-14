<?php

	require_once('../models/db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from ajax where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	

	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into ajax( id,password ,conpasswod, name,email,user_type) values('{$user['id']}' , '{$user['password']}', '{$user['conpasswod']}','{$user['name']}','{$user['email']}','{$user['user_type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


?>