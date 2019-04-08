<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Validations</title>
<style>
input{margin:10px;}
.red{color:red}
</style>
</head>
<body>
	<?php if(isset($_SESSION['msg'])){ ?>
			<h1 class="red"><?=$_SESSION['msg']?></h1>
	<?php }else{ ?>	
		<h1>Login Form</h1>
	<?php } ?>
    <form action="ac.php" method="post" enctype="multipart/form-data">
  		<input type="text" name="user" placeholder="user name here"><br>
  		<input type="password" name="pass" placeholder="user password">
  		<br>
  		<input type="password" name="repass" placeholder="enter pass again">
  		<br>
      	<input type="submit" name="set" value="Form submit">
    </form>
</body>
</html>
<?php session_destroy(); ?>