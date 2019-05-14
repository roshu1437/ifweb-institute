<?php 
// $a='a';
// $b='b';
// $c='c';

// if($a=='a' AND $b=='c'){
// if($a=='a' and $b=='c'){
// if($a=='a' && $b=='c'){
// if($a=='a' or $b=='c'){
// if($a=='a' OR $b=='c'){
// if($a=='a' || $b=='c'){
// 	echo 'Done';
// }else{
// 	echo 'Wrong';
// }

// Check button click
if(isset($_POST['login'])){
	// check fields empty or not
	if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['repass']) && !empty($_POST['email'])){
		// store values in variables		
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$email=$_POST['email'];
		// check password
		if(strlen($pass) < 5){
			echo 'password is to short.';
			exit;
		}
		if($pass != $repass){
			echo "password not match.";
			exit;
		}
		echo 'user in';
	}else{
		echo 'please fill all the fields.';
	}
}


?>