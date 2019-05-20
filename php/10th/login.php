<!DOCTYPE html>
<html>
<head>
	<title>PHP Array</title>
</head>
<body>
<?php 
session_start();
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
	} 

?>
<!-- path "../../" -->
<?php //include('link.php'); ?>
<?php //include_once('link.php'); ?>
<?php require('link.php'); ?>
<?php //require_once('link.php'); ?>
	<form method="post" action="act.php" enctype="multipart/form-data">
		<input type="text" name="user" placeholder="user name or email">
		<input type="password" name="pass" placeholder="Enter Password">
		<input type="submit" name="login" value="Login">
	</form>
</body>
<?php session_destroy(); ?>
</html>