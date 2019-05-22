<!DOCTYPE html>
<html>
<head>
	<title>table creation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="tables work.php" method="post">
	<input name="number" type="Text" placeholder="insert numbers table" > q q
	<input type="Submit" value="Submit">
</form>
<?php
	if (isset($_POST['number'])) {
		$number = $_POST['number'];
		if ($number >= 2 && $number <= 10000) {
			for ($t = 1; $t <=30 ; $t++) { 
				echo "$number x $t = ".$number*$t."<br>";
			}
		}else{
			echo "Choose Table between 2 and 10000.";
		}
}
?>
</body>
</html>