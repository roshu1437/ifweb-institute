<?php 
session_start();
function url($path='',$type=false){
	if($type){
		return "http://localhost/webG/php/project/".$path;
	}else{
		echo "http://localhost/webG/php/project/".$path;
	}
}
function msg($type,$msg,$url){
	$_SESSION[$type]=$msg;
	header('Location: '.$url);
}
function mail_send($from,$subject,$msg){
	$data=array(
	  'personalizations' => 
	  array(
	    0 => 
	    array(
	      'to' => 
	      array(
	        0 => 
	        array(
	          'email' => $from,
	        ),
	      ),
	    ),
	  ),
	  'from' => 
	  array(
	    'email' => 'admin email',
	  ),
	  'subject' => $subject,
	  'content' => $msg,
	  array(
	    0 => 
	    array(
	      'type' => 'text/html',
	      'value' => $msg,
	    ),
	  ),
	);
	$data= json_encode($data);
	$SENDGRID_API_KEY='Your Key';
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
function user_login($user_id){
	$con=mysqli_connect('localhost','root','','webg');
	$q='SELECT * FROM user WHERE id="'.$user_id.'"';
	$qr=mysqli_query($con,$q);
	$data=mysqli_fetch_assoc($qr);
	return $data;
}
?>