<?php 
$db=mysqli_connect('localhost','root','','webeg');
if(!$db){
	echo 'Server is busy';
	die;
}

if(isset($_GET['t'])){
	$token=$_GET['t'];
	$q='UPDATE user SET active="1" WHERE token="'.$token.'"';
	$qr=mysqli_query($db,$q);
	if($qr){
		echo 'account verify';
	}else{
		echo 'try again';
	}
}


?>