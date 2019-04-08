<?php 
include('conection.php');
// doc signup validation
if(isset($_POST['register'])):
	if(!empty($_POST['first-name']) and !empty($_POST['last-name']) and !empty($_POST['email']) and !empty($_POST['postal-code']) and !empty($_POST['card_number']) and !empty($_POST['pass']) and !empty($_POST['re-pass']) and !empty($_POST['cnic']) and !empty($_POST['address']) and !empty($_POST['degree']) and !empty($_POST['gender']) and !empty($_POST['town']) and !empty($_FILES['dr_img']['name'])){
		// store values 
		$fname=$_POST['first-name'];
		$lname=$_POST['last-name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$rpass=$_POST['re-pass'];
		$pcode=$_POST['postal-code'];
		$cardnumber=$_POST['card_number'];
		$cnic=$_POST['cnic'];
		$address=$_POST['address'];
		$degree=$_POST['degree'];
		$gender=$_POST['gender'];
		$specialist_doc=$_POST['town'];
		// password validation
		if($pass != $rpass){
			sh('error','password not match','dcsignup.php');
			die;
		}
		// Check email validation
		$check_email='SELECT * FROM signup WHERE email_address="'.$email.'"';
		$check_email_run=mysqli_query($con,$check_email);
		if(!$check_email_run){
			sh('error','Server is busy','dcsignup.php');
			die;
		}
		if(mysqli_num_rows($check_email_run)>0){
			sh('error','This email is already taken','dcsignup.php');
			die;
		}
		$img=$_FILES['dr_img'];
		$img_name=$img['name'];
		$img_size=$img['size'];
		$img_path=$img['tmp_name'];
		$img_type=$img['type'];
		$ext=explode('/',$img_type);
		if($ext[0] != 'image'){
			sh('error','Only upload image','dcsignup.php');
			die;
		}
		$img_name=time().$img_name;
		$move=move_uploaded_file($img_path,'upload/'.$img_name);
		if(!$move){
			sh('error','please try again','dcsignup.php');
			die;
		}
		// Data insert
		$arrayName = array('first_name' => $fname, 'first_name' => $fname);
		$data_insert='
			INSERT INTO signup SET
			login_type="1",
			first_name="'.$fname.'",
			last_name="'.$lname.'",
			email_address="'.$email.'",
			phone_number="'.$pcode.'",
			img_name="'.$img_name.'",
			credit_card="'.$cardnumber.'",
			login_pass="'.$pass.'",
			cnic_number="'.$cnic.'",
			home_address="'.$address.'",
			doct_deg="'.$degree.'",
			person_gen="'.$gender.'",
			specialist_doc="'.$specialist_doc.'"
		';
		$data_insert_run=mysqli_query($con,$data_insert);
		if($data_insert_run){
			sh('done','done','dcsignup.php');
			die;
		}else{
			sh('error','please try again','dcsignup.php');
			die;
		}


	}else{
		s('error','Please fill all the fields');
		h('dcsignup.php');
		die;
	}
endif;


// patent signup validation
if(isset($_POST['pregister'])):
	// echo "<pre>";print_r($_POST);die('die');echo "</pre>";
	if(!empty($_POST['first-name']) and !empty($_POST['last-name']) and !empty($_POST['email']) and !empty($_POST['postal-code']) and !empty($_POST['card_number']) and !empty($_POST['pass']) and !empty($_POST['re-pass']) and !empty($_POST['cnic']) and !empty($_POST['address']) and !empty($_POST['gender']) and !empty($_POST['section']) and !empty($_POST['incharge']) and !empty($_POST['guardain'])){
		// store values 
		$fname=$_POST['first-name'];
		$lname=$_POST['last-name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$rpass=$_POST['re-pass'];
		$pcode=$_POST['postal-code'];
		$cardnumber=$_POST['card_number'];
		$cnic=$_POST['cnic'];
		$address=$_POST['address'];
		$section=$_POST['section'];
		$gender=$_POST['gender'];
		$incharge=$_POST['incharge'];
		$guardain=$_POST['guardain'];
		// password validation
		if($pass != $rpass){
			sh('error','password not match','ptsignup.php');
			die;
		}
		// Check email validation
		$check_email='SELECT * FROM signup WHERE email_address="'.$email.'"';
		$check_email_run=mysqli_query($con,$check_email);
		if(!$check_email_run){
			sh('error','Server is busy','ptsignup.php');
			die;
		}
		if(mysqli_num_rows($check_email_run)>0){
			sh('error','This email is already taken','ptsignup.php');
			die;
		}
		// Data insert
		$data_insert='
			INSERT INTO signup SET
			login_type="2",
			first_name="'.$fname.'",
			last_name="'.$lname.'",
			email_address="'.$email.'",
			phone_number="'.$pcode.'",
			credit_card="'.$cardnumber.'",
			login_pass="'.$pass.'",
			cnic_number="'.$cnic.'",
			home_address="'.$address.'",
			person_gen="'.$gender.'",
			pat_section="'.$section.'",
			patent_doc="'.$incharge.'",
			patent_tacker="'.$guardain.'"
		';
		$data_insert_run=mysqli_query($con,$data_insert);
		if($data_insert_run){
			sh('done','done','ptsignup.php');
			die;
		}else{
			sh('error','please try again','ptsignup.php');
			die;
		}


	}else{
		s('error','Please fill all the fieldss');
		h('ptsignup.php');
		die;
	}
endif;
?>