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
test
?>