<!DOCTYPE html>
<html>
<head>
	<title>sum</title>
</head>
<body>
	<form  method="post" action="index.php">
		<input type="text" placeholder="text here" name="text">
		<input type="submit" value="submit" name="sum">
	</form>

</body>
</html>
<?php
 	$b=$_POST['text'];
 	$c=explode('+', $b); 
    echo (isset($_POST['sum']) && !empty($_POST['text']))? array_sum($c):'fill box';


?>