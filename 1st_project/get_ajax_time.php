<?php 
include('conection.php');
if(isset($_POST['test'])):
	$cdate=$_POST['test'];
	$gt=mysqli_query($con,'SELECT * FROM time_table WHERE avail="1"');
	$coolect_time='';
	while ($res=mysqli_fetch_assoc($gt)){
		$get_date=explode('@',$res['time']);
		if($get_date[0]==$cdate){
			$coolect_time.=$get_date[1].'/';
		}
	}
	echo $coolect_time;
endif;

?>