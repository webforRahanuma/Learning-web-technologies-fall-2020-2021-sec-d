<?php

function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

function userValidate($id, $password){
    
    $sql = "select * from users where id = '$id' AND password = '$password'";
    
    $conn = getConnection('localhost', 'root', '', 'task');
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(count($row) > 0){
        
        if($row['user_type']=="User"){
            
           
            return true;
            
        }
        
        elseif($row['user_type']=="Admin"){
            
            
            return true;
            
        }
        
        
    }
    else{
        
        return false;
        
    }
    
}