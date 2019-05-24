<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>

	<form method="post" action="" enctype="multipart/form-data">
		<input type="text" name="nos" placeholder="Enter number">
		<input type="submit" name="login" value="Table">
	</form>

<?php 
echo (!empty(isset($_POST['nos'])))?array_sum(explode(',',$_POST['nos'])):'false'; 
?>
</body>
</html>