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
function mr($value){
	$CI =& get_instance();
	$CI->session->set_flashdata('msg',$value);
}
function send_mail($sender,$reciver,$subject,$html){
$data=array(
	'personalizations' => 
	  array(
	    0 => 
	    array(
	      'to' => 
	      array(
	        0 => 
	        array(
	          'email' => $reciver,
	        ),
	      ),
	    ),
	  ),
	  'from' => 
	  array(
	    'email' => $sender,
	  ),
	  'subject' => $subject,
	  'content' => 
	  array(
	    0 => 
	    array(
	      'type' => 'text/html',
	      'value' => $html,
	    ),
	  ),
	);
	$data= json_encode($data);
	$SENDGRID_API_KEY='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';
	$he = array('Content-Type: application/json',"Authorization: Bearer $SENDGRID_API_KEY");
	$api_url='https://api.sendgrid.com/v3/mail/send';
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $api_url);
	curl_setopt($ch,CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$he);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$response = curl_exec($ch);
	curl_close($ch);
	return true;
}
?>