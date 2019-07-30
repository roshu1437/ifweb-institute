<?php 
function msg($value){
	$msg='';
	if($value=='ae'){
		$msg='Please Fill All The Fields';
	}elseif($value=='already'){
		$msg='This Data Already Exist';
	}elseif($value=='add'){
		$msg='Data Added Successfully';
	}elseif($value=='ta'){
		$msg='Please Try Again';
	}
	$CI =& get_instance();
	$CI->session->set_flashdata('msg',$msg);
}

?>