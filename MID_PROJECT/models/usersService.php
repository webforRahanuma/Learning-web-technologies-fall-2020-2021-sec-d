<?php

	require_once('db.php');

	function validate($user)
	{

			
		$conn = getConnection();
		$sql = "select * from buyerlogin where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}

	function insertregisterbuyer($user){
 
		$conn = getConnection();
		$sql = "insert into buyerlogin values('', '{$user['username']}', '{$user['password']}', '{$user['email']}' ,'{$user['profiledatabase']}')";
	   
		$status = mysqli_query($conn, $sql);
	   
		if($status){
			return true;
		}else{
			return false;
		}
	   }
	
	   function  buyerprofileinfo(){
		$conn = getConnection();
	   // $sql = "select * from buyerlogin ";
	   $sql ="SELECT profiledatabase FROM buyerlogin WHERE id = '3'";
        $result = mysqli_query($conn, $sql);
 
        $user =[];
 
        while($data = mysqli_fetch_assoc($result)){
            array_push($user, $data);
        }
 
        return $user;
 
	} 
	function updatebuyerProfile()
    {
        $conn = getConnection();
 
        $id = $_POST['id'];
    $profiledatabase = $_POST['profiledatabase'];
     
    
 
    $sql ="update buyerlogin set profiledatabase='$profiledatabase' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
        
 
         
        $status = mysqli_query($conn, $sql);
        if($status){
            return true;
        }else{
            return false;
        }
 
	}
	function insertaddinfo($user){
 
        $conn = getConnection();
        $sql = "insert into information values('', '{$user['info']}')";
 
        $status = mysqli_query($conn, $sql);
 
        if($status){
            return true;
        }else{
            return false;
        }
	}
	function showbuyerquestion(){
            
        $conn = getConnection();
        $sql = "select * from buyerquestion";
        $result = mysqli_query($conn, $sql);
 
        $user =[];
 
        while($data = mysqli_fetch_assoc($result)){
            array_push($user, $data);
        }
 
        return $user;
 
	}
	function buyercomment($user){
 
        $conn = getConnection();
        $sql = "insert into buyercomment values('','{$user['comment']}')";
 
        $status = mysqli_query($conn, $sql);
 
        if($status){
            return true;
        }else{
            return false;
        }
    }
	function insertreport($user){
 
        $conn = getConnection();
        $sql = "insert into report values('', '{$user['report']}')";
 
        $status = mysqli_query($conn, $sql);
 
        if($status){
            return true;
        }else{
            return false;
        }
	}
	function insertreview($user){
 
        $conn = getConnection();
        $sql = "insert into review values('', '{$user['review']}')";
 
        $status = mysqli_query($conn, $sql);
 
        if($status){
            return true;
        }else{
            return false;
        }
	}
	function getallitems(){
 
        $conn = getConnection();
        $sql = "select * from item";
        $result = mysqli_query($conn, $sql);
 
        $user =[];
 
        while($data = mysqli_fetch_assoc($result)){
            array_push($user, $data);
        }
 
        return $user;
	}
	function paymentdone($user){
 
        $conn = getConnection();
        $sql = "insert into payment values('', '{$user['price']}')";
 
        $status = mysqli_query($conn, $sql);
 
        if($status){
            return true;
        }else{
            return false;
        }
	}
	function getById(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into users values('', '{$user['buyer_user_name']}', '{$user['buyer_password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from users where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($user){

	}

?>