<!DOCTYPE html>
<html>
<head>
	<title>task 1</title>
</head>
<body>

	<form method="post" >
		<input type="text" name="table" placeholder="enter any number">
		<input type="submit" name="login" "value ="login">
		
	</form>

		<?php
	if (isset($_POST['table'])) {
		if (!empty($_POST['table'])) {
			 $input = $_POST['table'];
			 	if (filter_var($input, FILTER_VALIDATE_INT)) {
				for ($i=1; $i <= 10; $i++) { 
					echo $input. "*" . $i ."=".$input*$i ."<br>";
				}
				
			}
			else{
				echo "only integer value allowed";
			}
		}
		else{
			echo "please fill all fields";
		}
	}
	


	?>

</body>
</html>