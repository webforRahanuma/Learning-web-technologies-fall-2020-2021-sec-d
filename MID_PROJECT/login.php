<?php
if(isset($_REQUEST['msg'])){
	if($_REQUEST['msg'] == 'null'){
		echo "null submission...";
	}
	if($_REQUEST['msg'] == 'invalid'){
		echo "invalid username/password";
	}
	if($_REQUEST['msg'] == 'login_first'){
		echo "please login first...";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="Asset/style.css">
	
</head>
<body>
	<form method="post" action="HTML/loginCheck.php">
		<fieldset>
		<center>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="name" name="username" onkeyup="f1()"></td>
					<td><p id="head"></p></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><a href="HTML/registration.php">Register</a></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
</center>
		</fieldset>
	</form>
	<script type="text/javascript" src="Asset/script.js"></script>
</body>
</html>

