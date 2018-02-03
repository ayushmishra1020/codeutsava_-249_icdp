<?php
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');


	$_SESSION['name']=null;
	$_SESSION['email']=null;
session_destroy();
header('location: login.php');
?>