<?php 
include('../inc/function.php');
include('../inc/db.php');
if(isset($_POST['u_signup'])){
	if(isset($_POST['u_terms'])){
		if(!empty($_POST['f_name']) && !empty($_POST['u_email']) && !empty($_POST['u_gender']) && !empty($_POST['u_pass']) && !empty($_POST['u_rpass']) && !empty($_POST['u_address'])){
			//store values
			$fn=$_POST['f_name'];
			$ln=$_POST['l_name'];
			$email=$_POST['u_email'];
			$g=$_POST['u_gender'];
			$pass=$_POST['u_pass'];
			$rpass=$_POST['u_rpass'];
			$adrs=$_POST['u_address'];
			//check subscription
			$sbs=0;
			if(isset($_POST['u_subscription'])){
				$sbs=1;
			}
			// check password match
			if($rpass!=$pass){
				msg('error','Please Enter Same Password',url('',true));
				die;
			}
			// check password length
			if(strlen($pass) > 20 || strlen($pass) < 4){
				msg('error','Please enter password between 4 to 20 charters',url('',true));
				die;
			}
			// make unique id
			$token=md5(md5(time()+microtime()));
			//insert data
			$q='
				INSERT INTO user SET
				first_name="'.$fn.'",
				last_name="'.$ln.'",
				email="'.$email.'",
				pass="'.md5($pass).'",
				gender="'.$g.'",
				address="'.$adrs.'",
				subscription="'.$sbs.'",
				token="'.$token.'"
			';
			$qr=mysqli_query($con,$q);
			if($qr){
				msg('done','Welcome To Submilyga Please Active Your Account First',url('',true));
				die;
			}else{
				msg('error','Please Submit Values Again',url('',true));
				die;
			}

		}else{
			msg('error','Please Fill All The Fields',url('',true));
			die;
		}
	}else{
		msg('error','Please Accept Terms & Conditions',url('',true));
	}
}
?>