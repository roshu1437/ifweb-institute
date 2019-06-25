<!DOCTYPE html>
<html>
<head>
	<title>Form SignUp</title>
<style>
.signup,.login{
	width: 50%;
	float: left;
}
</style>
</head>
<body>
	<div class="signup">
		<h1>Signup</h1>
		<form action="action.php" method="post">
			<input type="text" name="f_name" placeholder="First Name"><br><br>
			<input type="text" name="l_name" placeholder="Last Name"><br><br>
			<input type="email" name="email" placeholder="Enter Email"><br><br>
			<input type="password" name="pass" placeholder="Enter Password"><br><br>
			<input type="password" name="repass" placeholder="Enter Password Again"><br><br>
			<input type="submit" name="signup" value="SignUp">
		</form>
	</div>
	<div class="login">
		<h1>Login</h1>
		<form action="action.php" method="post">
			<input type="email" name="login_email" placeholder="Enter Email"><br><br>
			<input type="password" name="login_pass" placeholder="Enter Password"><br><br>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>