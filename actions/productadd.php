<?php 
include('../inc/function.php');
include('../inc/db.php');
if(isset($_POST['p_add'])){
	if(isset($_POST['p_terms'])){
		$img=$_FILES['p_images'];
		if(count($img['name']) > 2 && count($img['name']) < 6){
			if(!empty($_POST['p_name']) && !empty($_POST['p_price']) && !empty($_POST['p_cats']) && !empty($_POST['p_location']) && !empty($_POST['p_quantity']) && !empty($_POST['p_size']) && !empty($_POST['p_color']) && !empty($_POST['p_own_number']) && !empty($_POST['p_description']) && !empty($_POST['p_own_id'])){

				// store in variabels
				$n=$_POST['p_name'];
				$rs=$_POST['p_price'];
				$pc=$_POST['p_cats'];
				$pl=$_POST['p_location'];
				$pq=$_POST['p_quantity'];
				$ps=$_POST['p_size'];
				$cl=$_POST['p_color'];
				$num=$_POST['p_own_number'];
				$pd=$_POST['p_description'];
				$id=$_POST['p_own_id'];
				// images store
				$images_name='';
				foreach($img['name'] as $img_index => $img_value){
					$ext=explode('/',$img['type'][$img_index]);
					$ext=$ext[1];
					$name_temp=time()+$img_index.'.'.$ext;
					$path='../assets/product_img/';
					$move=move_uploaded_file($img['tmp_name'][$img_index],$path.$name_temp);
					if($move){
						$images_name.=$name_temp.'@';
					}
				}
				$q='INSERT INTO product SET
					p_name="'.$n.'",
					p_price="'.$rs.'",
					p_images="'.$images_name.'",
					p_cats="'.$pc.'",
					p_location="'.$pl.'",
					p_quantity="'.$pq.'",
					p_size="'.$ps.'",
					p_own_number="'.$num.'",
					p_description="'.$pd.'",
					p_color="'.$cl.'",
					p_own_id="'.$id.'"
				';
				$qr=mysqli_query($con,$q);
				if($qr){
					msg('done','product send for verification',url('productadd.php',true));
					die;
				}else{
					msg('error','PLease try again',url('productadd.php',true));
					die;
				}
			}else{
				msg('error','PLease fill all the fields',url('productadd.php',true));
				die;
			}
		}else{
			msg('error','PLease Select between 3 to 5 images.',url('productadd.php',true));
			die;
		}
	}else{
		msg('error','PLease accept terms first.',url('productadd.php',true));
		die;
	}
}
?>