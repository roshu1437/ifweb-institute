<?php
$con=@mysqli_connect('localhost','root','','web730');
if(!$con){
	echo "Data base connect";
}
$num=1;
$ali='ali';
$d='test';

$query='
		INSERT INTO test SET
		id="'.$num.'",
		name="'.$ali.'",
		description="'.$d.'"
	';
$run=mysqli_query($con,$query);
if($run){
	echo "Data inserted";
}else{
	echo "Data not inserted";
}

?>