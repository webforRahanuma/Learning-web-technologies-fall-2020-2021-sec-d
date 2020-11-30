<?php
require_once('header.php');
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost', 'root', '', 'datatable');
	$sql = "delete from users where id = '$id'";
	$result = mysqli_query($conn, $sql);
header("location:home.php");
?>