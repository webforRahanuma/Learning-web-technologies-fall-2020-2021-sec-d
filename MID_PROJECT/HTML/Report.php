<?php
session_start();
require_once('../HTML/header.php');
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
 
    if(empty($_POST['report']))
    {
         echo 'please enter reason';
		
    }
    else
    {
		$id = $_REQUEST['id'];
        $report = $_REQUEST['report'];
        header('location:user_home.php?msg=invalid');       
$user = [
	'id'=> $id,
    'report'=> $report

];
insertreport($user);
 
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
	<form method='post'>
	<center>
		<table width="900px" border="0">
			<tr height="80px" width="800px" align="center">
				<td colspan="3">
					 <h1>Not Interested</h1>
				</td>
			</tr>
			<tr>
				<td>Report</td>
				<td><input type="text" name="report" ></td>
			</tr>
			</tr>
			
			<tr height="40px">
				<td colspan="3" align="center">
				<input type="submit" name="submit" value="Add">
					<br/>
					<br><a href="user_home.php"><input type="button" value=" Back"></a>
        <a href="logout.php">logout</a><br>
				</td>
            </tr>
            <?php require 'footer.php';?>
	</center>
</form>
</body>
</html>