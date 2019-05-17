<?php 
	//Check Submission
	if(isset($_POST['login'])){
		//Check Fields Empty Or Not
		if(!empty($_POST['user']) && !empty($_POST['pass'])){
			//Store in variables
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			//Check Name And Password
			if($user=='ali' && $pass=='1234'){
				// setcookie('name','value','expired','access');
				setcookie('login',$user,time()+20,'/');
				header('Location: http://localhost/webeg/php/9th/');
			}else{
				echo 'User name and password not match';
			}
		}else{
			echo 'please fill all the fields';
		}
	}



?>