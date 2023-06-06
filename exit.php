<?php
	session_start();
	include('config.php');
	unset($_SESSION['user_id']);
	unset($_SESSION['user_role']);  
	session_destroy();
	header("Location: registration.php");
	exit;
?>