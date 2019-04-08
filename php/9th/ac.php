<?php 
	if(!empty($_POST['cal'])){
		if(!empty($_POST['v1']) and !empty($_POST['v2']) and !empty($_POST['opr'])){
			$v1=$_POST['v1'];
			$v2=$_POST['v2'];
			$opr=$_POST['opr'];
			// echo $v1.' '.$v2.' '.$opr;
			if($opr=='+'){
				echo ($v1)+($v2);
			}elseif($opr=='-'){
				echo ($v1)-($v2);
			}elseif($opr=='*'){
				echo ($v1)*($v2);
			}elseif($opr=='/'){
				echo ($v1)/($v2);
			}
		}
	}
	if(!empty($_POST['table'])){
		if(!empty($_POST['table_gen'])){
			$table=$_POST['table_gen'];
			for ($i=1; $i <=10 ; $i++) { 
				echo $table.' x '.$i.' = '.$table*$i.'<br>';
			}
		}
	}


?>