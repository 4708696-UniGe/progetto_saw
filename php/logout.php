<?php
	session_start();
	session_destroy();
	setcookie('FIRSTNAME', null, -1);
	setcookie('LASTNAME', null, -1);
	setcookie('ID_USER', null, -1);
	header("Location: home.php");
	exit();
?>