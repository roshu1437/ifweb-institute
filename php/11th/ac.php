<?php 

	// echo phpinfo();
	echo trim("remove extra spaces");
	echo ltrim("remove extra spaces");
	echo rtrim("remove extra spaces");
	$a = array('test1','test2');
	$b = array('t1'=>'test3','t2'=>'test4');
	$c=array_merge($b,$a);
	echo "<pre>";print_r($c);die('die');echo "</pre>";
	die;

	if(!empty($_FILES['img']['name'])){		
		$img_name=$_FILES['img']['name'];
		$img_type=$_FILES['img']['type'];
		$img_size=$_FILES['img']['size'];
		$img_oldpath=$_FILES['img']['tmp_name'];
		$ext=explode('/',$img_type);
		if($ext[1]!='jpeg'){
			echo "Only Jpeg image is allowed";
			die;
		}
		if($img_size > 2*1024*1024){
			echo "image size is too large";
			die;	
		}
		$img_newpath='sorce/'.time().$img_name;
		$move=move_uploaded_file($img_oldpath,$img_newpath);
		if($move){
			echo "image upload";
		}else{
			echo "image not uploaded";
		}
	}else{
		echo "image not upload";
	}
// echo "<pre>";print_r($_FILES['img']);die('die');echo "</pre>";

?>