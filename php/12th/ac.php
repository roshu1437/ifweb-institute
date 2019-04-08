<?php 
session_start();
	echo strlen($_POST['user']);
	echo strlen($_POST['pass']);
	die;
	if(isset($_POST['set'])){
		if(!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['repass'])){
			if($_POST['pass'] != $_POST['repass']){
				$_SESSION['msg']="password not match";
				header('Location: http://localhost/web8.30/php/12th/');
				exit;
			}
			$_SESSION['msg']="user login";
			header('Location: http://localhost/web8.30/php/12th/');
		}else{
			$_SESSION['msg']="please fill all the fields";
			header('Location: http://localhost/web8.30/php/12th/');
		}
	}

?>