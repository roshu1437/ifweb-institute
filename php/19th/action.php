<?php 
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	// Delete query
	// $q='
	// 	DELETE FROM user
	// 	WHERE id="3"
	// ';
	// update query
	// $q='
	// 	UPDATE user SET
	// 	fname="first name",
	// 	lname="last name"
	// 	WHERE id="3"
	// ';
	$q='SELECT * FROM user where fname like "%a%"';
	$qr=mysqli_query($db,$q);
	// echo $q;
	// die;
	if($qr){
		while ($res=mysqli_fetch_assoc($qr)) {
			echo "<pre>";print_r($res);echo "</pre>";
		}
		// echo "Data updated.";
	}else{
		echo 'somthing went wrong!!';
	}


?>