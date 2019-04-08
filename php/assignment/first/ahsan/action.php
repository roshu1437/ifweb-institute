<?php

function st_length($str)
{
	for ($a=-1; isset($str[++$a]);)
	{
		return $a; 
	}
}
 
 echo st_length($_POST['user']);
 
 ?>
