<?php 
	// Check fields empty or not
	if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['re-pass'])){

		$pass=$_POST['pass'];
		$rpass=$_POST['re-pass'];
		if($pass==$rpass){
			echo "user in";
		}else{
			echo "Password not mat";
		}

	}else{
		echo "please fill all the fields";
	}
 ?>