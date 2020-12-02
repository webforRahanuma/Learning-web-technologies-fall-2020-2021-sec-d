<?php
	require_once('../models/usersService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: userlist.php');
	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>Delete User</title>
	</head>
	<body>

		<form action="../php/usercontroller.php" method="post">
        <center>
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?=$user['username']?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?=$user['password']?>"></td>
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
                    <a href="userlist.php">User List</a> |
				</tr>
				</table>
			</fieldset>
            </center>
		</form>
	</body>
</html>