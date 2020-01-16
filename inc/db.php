<?php 
	$con=mysqli_connect('localhost','root','','webg');
	if(!$con){
		msg('error','Something Went Wrong',url('',true));
		die;
	}
?>