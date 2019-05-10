<!DOCTYPE html>
<html>
<head>
	<title>PHP Array</title>
</head>
<body>
<?php 
	$a='test';
	$index_array=array('v1','v5','v2','v3','v4');
	$assoc_array=array(
		'name'=>'ali',
		'test'=>'v2',
		'n3'=>'v3',
		'n4'=>'v4',
		'n5'=>'v5'
	);
	// echo $index_array[3];
	echo $assoc_array['n3'];
	echo '<pre>';
	print_r($index_array);
	print_r($assoc_array);






?>
</body>
</html>