<?php
$con=@mysqli_connect('localhost','root','','web730');
if(!$con){
	echo "Data base connect";
}
$num=1;
$ali='ali';
$d='test';

// where query
// ASC or DESC
$query='SELECT * FROM test WHERE id="3"';
// echo $query;
$run=mysqli_query($con,$query);
if($run){
	if(mysqli_num_rows($run)>0){
		// mysqli_fetch_row -> for index
		// mysqli_fetch_assoc -> for name
		// mysqli_fetch_array -> for Both values
		while ($res=mysqli_fetch_assoc($run)) {  
			// echo "test values ".$res['id'];
			// echo "test values ".$res[0];
			echo "<pre>";
			print_r($res);
		}
	}else{
		echo "No data found";
	}
}else{
	echo "query not run";
}
// update query
$q='
	UPDATE test SET
	name="update_again",
	description="update_again"
	WHERE id="3"
';
$qr=mysqli_query($con,$q);
if($qr){
	echo "data update";
}else{
	echo "data not update";
}
// $file='index.php';
// $data='His name is haseeb';
// $f_open=fopen($file,'a');
// fwrite($f_open,$data);
// fclose($f_open);
// unlink($file);

?>