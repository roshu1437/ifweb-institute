<?php 
session_start();
$con=mysqli_connect('localhost','root','','first_project');
$url='http://localhost/web8.30/1st_project/';

function s($type,$msg){
	$_SESSION[$type]=$msg;
}
function h($uri){
	header('Location: '.$url.$uri);
}
function sh($type,$msg,$uri){
	$_SESSION[$type]=$msg;
	header('Location: '.$url.$uri);
}
?>
