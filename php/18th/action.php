<?php 
	$i=1;
	while (1==1) {
		echo $i.'-> '.time().'<br>';
		$i++;
	}
	die;
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	// $q='SELECT * FROM user LIMIT 3,2';
	$q='SELECT * FROM user LEFT JOIN cat ON user.id=cat.user_id where user.id="3"';

	$q='SELECT * FROM user where id="3"';
	$qr=mysqli_query($db,$q);
	$res=mysqli_fetch_assoc($qr);

	$q1='SELECT * FROM cat where user_id="'.$res['id'].'"';
	$qr1=mysqli_query($db,$q1);
	while ($res1=mysqli_fetch_assoc($qr1)) {
		echo "<pre>";print_r($res1);echo "</pre>";
	}
?>