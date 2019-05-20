<?php 
session_start();
	if(isset($_POST['login'])){
		if(!empty($_POST['user']) && !empty($_POST['pass'])){
			if(strlen($_POST['pass']) < 5){

				$_SESSION['error']='Password is to short';
				header('Location: http://localhost/webeg/php/10th/login.php');
				exit;	
			}
			if($_POST['pass']!='123456'){
				
				$_SESSION['error']='Password is Wrong';
				header('Location: http://localhost/webeg/php/10th/login.php');
				exit;	
			}
			echo 'Done';
		}else{
			$_SESSION['error']='Please fill all the fields';
			header('Location: http://localhost/webeg/php/10th/login.php');
			exit;
		}
	}
?>