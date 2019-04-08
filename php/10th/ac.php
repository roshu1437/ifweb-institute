<?php 
	if(!empty($_FILES['img']['name'])){
		$img_name=$_FILES['img']['name'];
		$img_type=$_FILES['img']['type'];
		$img_size=$_FILES['img']['size'];
		$ext=explode('/',$img_type);
		if($ext[1]!='jpeg'){
			echo "Only Jpeg image is allowed";
			die;
		}
		echo "image upload";
	}else{
		echo "image not upload";
	}
// echo "<pre>";print_r($_FILES['img']);die('die');echo "</pre>";

?>