<?php 
	// mysqli_connect('server name','user name','user pass','database');
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Somthing went wrong';
	}
	// insert query in sql
	$q='
		INSERT INTO user SET
		rollnumber="3",
		email="test@gmail.com",
		password="123456789"
	';
	for ($i=0; $i < 11; $i++) { 
		$qr=mysqli_query($db,$q);
	}
	if($qr){
		echo 'Data inserted';
	}else{
		echo 'Data Not inserted';
	}

?>