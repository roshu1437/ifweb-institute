<?php
function e($text){
	echo $text;
	exit;
}
function p($text){
	echo "<pre>";
	print_r($text);
	echo "</pre>";
	exit;
}
$test='test<?php test.png';
// e($test[0]);
// echo $test;
$t=explode('<?php',$test);
if(count($t)> 0){
	e('sorry');
}
// echo $t[1];
p($t);


// p($_GET);
	if(!empty($_GET['user']) and !empty($_GET['pass']) and !empty($_GET['re-pass'])){
		$pass=$_GET['pass'];
		$rpass=$_GET['re-pass'];
		if($pass==$rpass){
			echo "Hi";
			exit;
		}else{
			e("Password not mat");
		}
		echo " Ali";
	}else{
		e("please fill all the fields");
	}
 ?>
 <h1>my name is ali</h1>