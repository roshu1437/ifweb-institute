<?php 
error_reporting(0); 
    function ajStrlen($val){
        $str=$val;
        for ($i=0; $str[$i] != ''; $i++){} echo $i;
    }
// Use Functions
ajStrlen("this func created bt AHMER JUTT");

?>