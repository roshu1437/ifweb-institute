<?php 
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	if(isset($_POST['signup'])){
		if(!empty($_POST['email']) && !empty($_POST['pass']))
		$user=$_POST['user'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$token=md5(time());
		$q='INSERT INTO user SET
			fname="'.$user.'",
			email="'.$email.'",
			token="'.$token.'",
			password="'.$pass.'"
		';
		$qr=mysqli_query($db,$q);
		if($qr){ ?>

			<a href="verify.php?t=<?=$token?>">Click for Activation</a> 

	<?php	}else{
			echo "try again";
		}
	}
	//User login
	if(isset($_POST['login'])){
		if(!empty($_POST['email']) && !empty($_POST['pass']))
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$q='SELECT * FROM user WHERE email="'.$email.'" AND password="'.$pass.'"';
		$qr=mysqli_query($db,$q);
		if($qr){
			if(mysqli_num_rows($qr) > 0){
				$res=mysqli_fetch_assoc($qr);
				if($res['active']!=0){
					echo 'login';
				}else{
					echo 'Please verify your account first';
				}
			}else{
				echo 'email or password not match';
			}
			echo 'user add';
		}else{
			echo "try again";
		}
	}





?>