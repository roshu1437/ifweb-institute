<?php
$con=@mysqli_connect('localhost','root','','web730');
if(!$con){
	echo "Data base connect";
}
$num=1;
$ali='ali';
$d='test';

// $query='SELECT colom1,colom2 FROM test';
// select query
// $query='SELECT * FROM test';
// where query
$query='SELECT * FROM test WHERE id="1"';
// echo $query;
$run=mysqli_query($con,$query);
if($run){
	if(mysqli_num_rows($run)>0){
		// mysqli_fetch_row -> for index
		// mysqli_fetch_assoc -> for name
		// mysqli_fetch_array -> for Both values
		while ($res=mysqli_fetch_array($run)) {
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

?>