<?php 
	if(isset($_POST['login'])){
		if(!empty($_FILES['img']['name'])){
			// Store in variables
			$img=$_FILES['img'];
			$img_name=$img['name'];
			$img_type=$img['type'];
			$temp_path=$img['tmp_name'];
			$img_size=$img['size'];
			$ext=explode('/',$img_type);
			// check file extension
			if($ext[1]=='jpeg' || $ext[1]=='png'){

				// check image size
				if($img_size < 1024*1024){

					// Save Files
					$move=move_uploaded_file($temp_path,'files/'.time().$img_name);
					if($move){
						echo 'File uploaded';
					}else{
						echo 'Somthing went wrong please try again.';
					}
				}else{
					echo 'File is to large';
				}
			}else{
				echo 'File type in not allow.';
				// die;
			}
		}else{
			echo 'Please select file.';
			// die;
		}
		echo '<pre>	';
		print_r($_FILES['img']);
	}
?>