<!DOCTYPE html>
<html>
<head>
	<title>PHP Intro</title>
</head>
<body>
	<?php 
		$name='My name is ali';
		$br='<br>';
		$t='t';
		$ar_index=array('My name is ali','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','ali is my best friend','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23','my age is 23');

		$ar_assoc=array('c'=>'test','a'=>'My name is ali','b'=>'My age is 23');
		$ar_ml=array();
		$ar_ml['a']='test 1';
		$ar_ml['b']='test 2';
		$ar_ml['c']='test 3';
		$ar_ml['d']='test 4';
		$ar_ml['e']='test 5';
		$ar_ml['f']='test 6';
		echo $ar_ml['a'];
		echo $ar_index[30];
		echo $ar_assoc['a'];
		echo '<pre>';
		print_r($ar_assoc);	
		print_r($ar_ml);	
		print_r($ar_index);
		echo '</pre>';
		?>
</body>
</html>