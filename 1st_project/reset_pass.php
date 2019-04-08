<?php include('links.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgotten your account.</title>
</head>
<style>
	.forgotten{
		background: #009688a6;
		width: 500px;
		height: auto;
		box-sizing: border-box;
		padding: 20px;
		margin: 20px auto;
		border: 2px solid black;
		border-radius: 10px;
	}
	p{
		color: #000;
	}
	input{
		width: 100%;
		padding: 6px;
		margin-top: 5px;
		border-radius: 5px;
		font-size: 18px;
		border: 1px solid #000;
	}
	[type="submit"]{
		background: #00bcd4;
		transition: 1s;
	}
	[type="submit"]:hover{
		background: #795548;
	}
</style>
<body>
<div class="jumbotron">
	<div class="forgotten">
		<h2>Reset Your Password</h2>
		<hr>
		<p>Please check your email or phone number for a message with your code. Your code is 6 digits long.</p>
		<form action="" method="post">
			<input type="text" name="email" placeholder="Enter 6 digits code"><br>
			<input type="submit" name="reset">
			<input type="submit" name="cancel" value="Cancel">
		</form>
	</div>
</div>
</body>
</html>