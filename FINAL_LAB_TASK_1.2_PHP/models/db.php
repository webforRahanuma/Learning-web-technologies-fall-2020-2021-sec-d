<?php

	$servername = 'localhost';
	$dbuser		= 'root';
	$dbpass		= '';
	$database	= 'datatable';

	function getConnection(){
		global $servername;
		global $dbuser;
		global $dbpass;
		global $database;

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

?>