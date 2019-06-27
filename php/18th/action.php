<?php 
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	// $q='SELECT * FROM user LIMIT 3,2';
	// $q='SELECT * FROM user order by id desc';
	$qr=mysqli_query($db,$q);
	while ($res=mysqli_fetch_assoc($qr)) {
		echo "<pre>";print_r($res);echo "</pre>";
	}
?>