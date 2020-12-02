<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}

	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}
	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into employee values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from employee where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}
	function updateUsers($id){

		$conn = getConnection();
		
		$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	$sql ="update employee set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}


?>