<?php

function xyz(){
    $string=0;
     $i=0;
     while(isset($string[$i]))
     {
        $i++;
     }
     echo $i.' str '.strlen($string);
}
xyz();


// $string = "this is too great";
// $strlen = count(str_split($string));
// echo $strlen;

?>