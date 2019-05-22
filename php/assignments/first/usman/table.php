<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
		<form name="form" action="table.php" method="post">
  			<input type="text" name="subject" id="subject" placeholder="Enter Table" accept="Integer">
		</form>

		<?php 
		session_start();
			function table($v){
						for ($i=1; $i <= 10; $i++) { 
							echo "$v * $i = ".$v*$i."<br>";
						}
					}
				if (!empty($_POST['subject'])) {
					$value = $_POST['subject'];
						table($value);
					}else{
					echo "Please Enter Value";
					exit;
					}
		?>
</body>
</html>