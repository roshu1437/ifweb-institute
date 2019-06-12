<?php 
	// mysqli_connect('server name','user name','user pass','database');
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Somthing went wrong';
	}
	// for($i=0; $i < 20; $i++) { 
	// 	if($i==5){
	// 		// echo 'test';
	// 		// continue;
	// 		// die;
	// 	}
	// 	echo $i.'<br>';
	// }
	$t='ali';
	$a='ali';
	switch($t) {
		case 'ali':
			echo 'done';
			break;
		case 'test':
			echo 'done 2';
			break;
		case 'test3':
			echo 'done 3';
			break;
		default:
			echo 'not match';
			break;
	}




?>