<input type="text" name="">
<?php 
include('conection.php');

// test function
// function t($value){

// 	$q='SELECT * FROM signup WHERE '.$value['login_type'].'="1"';
// 	$qr=mysqli_query($value['con'],$q);
// 	$value=mysqli_fetch_assoc($qr);
// 	echo "<pre>";print_r($value);die('die');echo "</pre>";
// }
// $name1 = array(5,10,1);
// echo array_sum($name1);
// t($arrayName);

// doc signup validation
if(isset($_POST['login'])):
	if(!empty($_POST['email']) and !empty($_POST['pass'])){
		// store values 
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		// Check email validation
		$check_email='SELECT * FROM signup WHERE email_address="'.$email.'" AND login_pass="'.$pass.'" AND pat_discharge="1"';
		$check_email_run=mysqli_query($con,$check_email);
		if(!$check_email_run){
			sh('error','Server is busy','dcsignup.php');
			die;
		}
		if(mysqli_num_rows($check_email_run) < 1){
			sh('error','Email or Password not match','login.php');
			die;
		}
		$res=mysqli_fetch_assoc($check_email_run);
			// setcookie('name','value','time','access');
			setcookie('login',$res['signup_id'],time()+60*60,'/');
			h('index.php');
			die;
	}else{
		s('error','Please fill all the fields');
		h('login.php');
		die;
	}
endif;

// LogOut validation
if(isset($_GET['dell'])):
	setcookie('login',$_GET['dell'],time()-10,'/');
	h('index.php');
endif;
?>