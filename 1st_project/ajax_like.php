<?php 
include('conection.php');
if(isset($_POST['status'])){
	if(!isset($_COOKIE['like_status']) or $_COOKIE['like_status']!=$_POST['status']){
		$q='SELECT `like_status`,`dis_like` FROM posts where id="4"';
		$qr=mysqli_query($con,$q);
		$qrs=mysqli_fetch_assoc($qr);
		if($_POST['status']==1){
			$like=$qrs['like_status']+1;
			$dislike=$qrs['dis_like'];
		}else{
			$dislike=$qrs['dis_like']+1;
			$like=$qrs['like_status']-1;
		}
		$qu='UPDATE posts SET like_status="'.$like.'",dis_like="'.$dislike.'" WHERE id="4"';
		$qur=mysqli_query($con,$qu);
		setcookie('like_status',$_POST['status'],time()+60000,'/');
		$q_get=mysqli_query($con,'SELECT `like_status`,`dis_like` FROM posts where id="4"');
		$get=mysqli_fetch_assoc($q_get);
		echo $get['like_status'].'-'.$get['dis_like'];
	}else{
		echo 'already like';
	}


	// echo $_POST['status'];
}
die;
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