<?php include('links.php'); ?>
<?php 
	// Doctor accoutn deactive process
	if (isset($_POST['doc-deactive'])) {
		$id=$_POST['dr-account'];
		$deactive_q='
			UPDATE signup SET 
			pat_discharge="2"
			WHERE signup_id="'.$id.'"
		';
		$res=mysqli_query($con,$deactive_q);
		if (!$res) {
			sh('error','Try again later','acc_active_deactive.php');
			exit();
		}else{
			sh('done','done','acc_active_deactive.php');
			exit();
		}
	}
	// Patient account deactive process
	if (isset($_POST['pt-deactive'])) {
		$id=$_POST['pt-account'];
		$deactive_q='
			UPDATE signup SET 
			pat_discharge="3"
			WHERE signup_id="'.$id.'"
		';
		$res=mysqli_query($con,$deactive_q);
		if (!$res) {
			sh('error_pt_deactive','Try again later','acc_active_deactive.php');
			exit();
		}else{
			sh('done_pt_deactive','done','acc_active_deactive.php');
			exit();
		}
	}
	// Doctor account active process
	if (isset($_POST['doc-active'])) {
		$id=$_POST['dr-account'];
		$deactive_q='
			UPDATE signup SET 
			pat_discharge="1"
			WHERE signup_id="'.$id.'"
		';
		$res=mysqli_query($con,$deactive_q);
		if (!$res) {
			sh('error_dr_active','Try again later','acc_active_deactive.php');
			exit();
		}else{
			sh('done_dr_active','done','acc_active_deactive.php');
			exit();
		}
	}
	// Patient account active process
	if (isset($_POST['pt-active'])) {
		$id=$_POST['pt-account'];
		$deactive_q='
			UPDATE signup SET 
			pat_discharge="1"
			WHERE signup_id="'.$id.'"
		';
		$res=mysqli_query($con,$deactive_q);
		if (!$res) {
			sh('error_pt_active','Try again later','acc_active_deactive.php');
			exit();
		}else{
			sh('done_pt_active','done','acc_active_deactive.php');
			exit();
		}
	}
?>