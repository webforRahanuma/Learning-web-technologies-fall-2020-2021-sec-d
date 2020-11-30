<?php

	setcookie('flag', 'true', time()-100, '/');
	header('location: login.php');

?>