<?php 
include('conection.php');
// if(!empty($_POST['submit_post'])):
	if(!empty($_POST['post_writer']) and !empty($_POST['post_title']) and !empty($_POST['post_type']) and !empty($_POST['post_read'])and !empty($_FILES['t_img']['name'])and !empty($_FILES['b_img']['name']) && !empty($_POST['post_description'])){
		// store values 
		$post_writer=$_POST['post_writer'];
		$post_title=$_POST['post_title'];
		$post_type=$_POST['post_type'];
		$post_read=$_POST['post_read'];
		$t_img=$_FILES['t_img'];
		$b_img=$_FILES['b_img'];
		$post_desc=htmlspecialchars($_POST['post_description']);
		$dir='upload/';
		$t_img_name=time().$t_img['name'];
		$b_img_name=time().$b_img['name'];
		if(!move_uploaded_file($t_img['tmp_name'],$dir.$t_img_name)){
			echo "File not upload";
			die;
		}
		if(!move_uploaded_file($b_img['tmp_name'],$dir.$b_img_name)){
			echo "File not uploaded";
			die;
		}
		$insert='
			INSERT INTO posts SET 
			writer="'.$post_writer.'",
			title="'.$post_title.'",
			type="'.$post_type.'",
			thumbnail="'.$t_img_name.'",
			banner="'.$b_img_name.'",
			reading="'.$post_read.'",
			description="'.$post_desc.'"
		';
		if(mysqli_query($con,$insert)){
			echo "Post Added";
		}else{
			echo "Not added";
		}
	}else{
		s('error','Please fill all the fields');
		h('login.php');
		die;
	}
// endif;
?>