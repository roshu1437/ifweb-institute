<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
	<form method="post" action="index.php">
		<input type="text" name="number" placeholder="value1+value2+value3.."  class="border">
		<br>
		<input type="submit" name="sumgen" value="=" class="setting">
	</form>

	<div class="style">

	<i>
	<?php
	echo (isset($_POST['sumgen']) && !empty($_POST['number']))?"Result is ".array_sum(explode('+',$_POST['number'])):'<span style="color:red;"> enter some value </span>';
	 ?>
	 </i>
	</div>
</div>
</body>
</html>

<!-- // if(isset($_POST['sumgen']) && !empty($_POST['number']))
		// 	echo "Result is ".array_sum(explode('+',$_POST['number']))
		// else
		// 	echo '<span style="color:;"> enter some value </span>'; -->