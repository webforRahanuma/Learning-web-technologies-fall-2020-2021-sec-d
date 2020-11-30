<?php
require_once('header.php');
	if(isset($_REQUEST['submit'])){

	$conn = mysqli_connect('localhost', 'root', '', 'datatable');
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	$sql = "insert into users(id, username, password, email, type) values ('$id','$username','$password','$email','$type')";
	$result = mysqli_query($conn, $sql);
header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="">
	<center>
		<fieldset>
			<legend>Insert</legend>
			<table>
				
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><select name="type" >
				    <option value="user" selected>User</option>
				    <option value="admin">Admin</option>
                    <option value="student">Student</option>
			        </select> <br></td>
				</tr>
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</fieldset>

		</center>
	</form>
</body>
</html>