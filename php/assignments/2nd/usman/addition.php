<!DOCTYPE html>
<html>
<head>
	<title>Addition</title>
</head>
<style>
	h2{
		background: gray;
		color: white;
	}
	.work{
		border: 1px solid black;
		width: 300px;
		height: 200px;
		margin: 0px auto;
		float: none;
		line-height: 50px;
	}
	.texthere{
		border-radius: 10px;
		padding-left: 5px; 
	}
	.get{
		width: 80px;
		background-color: inherit;
		border-radius: 20px;
	}

</style>
<body>
		<h2 align="center">Sum of String</h2>
		
		<div class="work">
		<center><form method="post" action="addition.php">
			<input type="text" name="texthere" class="texthere" placeholder="Enter Text Here">
			<input class="get" type="submit" name="submit" value="Get Result">
		</form>

		<?php  	
				
				echo (isset($_POST['submit'])) && !empty($_POST['texthere']) ? "Sum of Numbers is: ".array_sum(explode(',', $_POST['texthere'])) : 'Field is Empty Please Enter a Number';
		?>
		</center>
		</div>
</body>
</html>