<?php
session_start();
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
 
    if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) || empty($_POST['profiledatabase']))
    {
        echo'insert data properly';
    }
    else{
        $id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$profiledatabase = $_REQUEST['profiledatabase'];
        header('location:../login.php?msg=invalid');    
$user = [
    'id'=> $id,
    'username'=> $username,
    'password'=> $password,
	'email'=> $email,
	'profiledatabase' => $profiledatabase
];
insertregisterbuyer($user);
 
    }    
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../Asset/style.css">
</head>
<body>
	<center>
		<form method="POST" action="">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<fieldset name="Reg">
							<legend><h3>REGISTRATION</h3></legend>
							<!--Id<br/><input type="text" name="id"><br/>-->
							
							<!--Confirm Password<br/><input type="password" name="conpass"><br/>-->
							Username<br/><input type="text" name="username"><br/>
							Password<br/><input type="password" name="password"><br/>
							Email<br><input type="email" name="email"><br>
							Profiledatabase<br><input type="text" name="profiledatabase"><br>
							<input type="submit" name="submit" value="Sign Up">
							<a href="../login.php">Sign In</a>
						</fieldset>
					</td>
				</tr>                                
			</table>
		</form>
		<a href="../login.php">Back</a>
		</center>		
</body>
</html>




			