<?php 
	$db=mysqli_connect('localhost','root','','webeg');
	if(!$db){
		echo 'Server is busy';
		die;
	}
	// select query for getting data
	$q='SELECT * FROM user';
	$qr=mysqli_query($db,$q);
	if($qr){
		$r=mysqli_num_rows($qr);
		if($r > 0){
			// $res=mysqli_fetch_row($qr);
			// mysqli_fetch_row -> for index array
			// mysqli_fetch_assoc -> for assoc(with colom name) array
			// mysqli_fetch_array -> for both array
			while($res=mysqli_fetch_array($qr)){
				// echo "<pre>";print_r($res);echo "</pre>";
				echo 'id-> '.$res['id'].'<br>';
				echo 'email-> '.$res['email'].'<br>';

			}
		}else{
			echo 'No Data Found';
		}
	}else{
		echo 'something went wrong';
	}



?>