<html>
	<head>
		<title>Assignment</title>
	</head>
	<body>
		<form method="get" action="">
			<input type="text" name="num" placeholder="enter number">
			<input type="submit" name="submit" value="submit">
		</form>
<?php 
	// echo(isset($_GET['submit']) && !empty($_GET['num']))? array_sum(explode('-', $_GET['num'])) :'please enter some values';
	echo(isset($_GET['submit']) && !empty($_GET['num']))? array_sum(explode('-', $_GET['num'])):'please enter some values' ;





 ?>
	</body>
</html>