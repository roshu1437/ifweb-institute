<?php

function my_strlen(){
	$input=$_POST['user'];
	$i = 0;
	while (isset($input[$i])){
        $i++;
    }
   	if ($i>0){
		echo $i;
	}
	else{
		echo 'Empty';
	}
}
my_strlen();

?>
