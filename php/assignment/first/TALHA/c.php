<?php

function s_length($str)
{
	for ($a=-1; isset($str[++$a]););{
	return $a; 
	}
}
 
 echo s_length($_POST['user']);
 // echo strlen($_POST['user']);




// if(!empty($_FILES['img']['name'])){
// 	$img_name=$_FILES['img']['name'];
// 	$img_type=$_FILES['img']['type'];
// 	$img_size=$_FILES['img']['size'];
// 	$ext=explode('/',$img_type);
// 	if ($ext[0]!='jpeg'){
// 		echo 'Only jpeg image is allowed';
// 		die;
// 	}
// 	echo 'image uploaded';
// }
// else{
// echo 'image not uploaded';	
// }
// // echo "<pre>";print_r($_FILES['img']);die('die');echo "</pre>";
 ?>
