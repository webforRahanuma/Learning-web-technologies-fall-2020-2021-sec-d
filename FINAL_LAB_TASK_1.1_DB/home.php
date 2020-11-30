<?php
	if(!isset($_COOKIE['flag'])){
		header('location: login.php?msg=login_first');
	}


	$conn = mysqli_connect('localhost', 'root', '', 'datatable');

	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home!<?php echo $_COOKIE['flag'];?> </h1>
	<a href="profile.php">Profile</a> |
	<a href="insert.php">Insert</a>|
	<a href="logout.php">logout</a>

	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Edit</td>
		</tr>

		<?php 
			while($data = mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?= $data['id'] ?></td>
					<td><?= $data['username'] ?></td>
					<td><?= $data['password'] ?></td>
					<td><?= $data['email'] ?></td>
					<td><?= $data['type'] ?></td>
					<td><a href="update.php?id=<?php echo $data['id']; ?>">Update</a>|
					<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a> </td>
				</tr>

		<?php } ?>

	</table>

</body>
</html>