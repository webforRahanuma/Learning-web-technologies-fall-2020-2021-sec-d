<?php
session_start();
require_once('../HTML/header.php');
require_once('../models/usersService.php');
$showbuyerquestion = showbuyerquestion();
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
<form method = "post">
	<center>
		<table width="900px" border="0">
		<h3>Buyer:</h3><textarea name="name" rows="20" cols="150" required>
 <?php 
		 for($i=0; $i < count($showbuyerquestion); $i++) {
	 ?>   
<?= ' Buyer:::'.$showbuyerquestion[$i]['question'] ?>
	 <?php } 
	 ?>
</textarea>
		 </table></center>
		 <center>
					<br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
            <?php require 'footer.php';?>
		 </center>
		 </form>
</body>
</html>