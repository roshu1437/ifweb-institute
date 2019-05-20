<!DOCTYPE html>
<html>
<head>
	<title>PHP Array</title>
</head>
<body>

<?php 
if(!isset($_COOKIE['login'])){
	header('Location: http://localhost/webeg/php/10th/login.php');
}
?>
	<h1>Welcome <?php echo $_COOKIE['login'];?></h1>
</body>
</html>