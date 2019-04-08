<?php 
	// exit();
	// die();
	// return false;
	// echo strlen($_POST['user']);
	// echo count($_POST);
	// echo md5($_POST['user']);
	// echo sha1($_POST['user']);
	// echo time();
	// echo rand(1000000000,5);
	// echo date('Y-M-D/d H:i:s').'<br>'.date('y-m-d/d h:i:s');
	// exit;
	// Check fields empty or not
	if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['re-pass'])){
		$pass=$_POST['pass'];
		$rpass=$_POST['re-pass'];
		if($pass==$rpass){
			echo "Hi";
		}else{
			echo "Password not mat";
			// exit;
			// die('ahahahahah');
			// return false;
		}
		echo " Ali";
	}else{
		echo "please fill all the fields";
	}
 ?>