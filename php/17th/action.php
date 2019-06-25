<?php 
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	// For user signup 
	if(isset($_POST['signup'])){
		if(!empty($_POST['f_name']) and !empty($_POST['l_name']) and !empty($_POST['email']) and !empty($_POST['pass']) and !empty($_POST['repass'])){
			$fname=$_POST['f_name'];
			$lname=$_POST['l_name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$rpass=$_POST['repass'];
			if($pass == $rpass){
				// where query
				$q='SELECT email FROM user WHERE email="'.$email.'"';
				$qr=mysqli_query($db,$q);
				if($qr){
					if(mysqli_num_rows($qr) < 1){
						$ins='INSERT INTO user SET
							fname="'.$fname.'",
							lname="'.$lname.'",
							email="'.$email.'",
							password="'.md5($pass).'"
						';
						$ins_run=mysqli_query($db,$ins);
						if($ins_run){
							echo 'User registerd';
						}else{
							echo "please try again";
						}
					}else{
						echo 'This email already taken';
					}
				}else{
					echo 'Server is much busy';
				}
			}else{
				echo 'Please Enter Same Password.';
			}
		}else{
			echo "Please Fill All the Fields.";
		}
	}

	// for user login
	if(isset($_POST['login'])){
		if(!empty($_POST['login_email']) && !empty($_POST['login_pass'])){
			$email=$_POST['login_email'];
			$pass=md5($_POST['login_pass']);

			$q='SELECT * FROM user WHERE email="'.$email.'" AND password="'.$pass.'"';
			$qr=mysqli_query($db,$q);
			if($qr){
				if(mysqli_num_rows($qr) > 0){
					echo 'user login';
				}else{
					echo "Email and password not match";
				}
			}else{
				echo "Please try again";
			}
		}else{
			echo 'Please Fill All the fields';
		}
	}




?>