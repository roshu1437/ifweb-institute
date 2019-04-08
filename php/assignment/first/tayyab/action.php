<?php 

	if(isset($_POST['find'])){
		// 1.
		// $value = $_POST['length'];
		// $value_array = str_split($value);
		// $len = count($value_array);
		// echo $len;
		// 2.
		// $value = $_POST['length'];
		// $i=0;
		// while ($value[$i] != '') {
		//   $i++;
		// }
		// print $i;
		// 3.
		$c=0;
		$value = $_POST['length'];
	  	while(true){
	    	if(!empty($value[$c])){
	     		$c=$c+1;
	    	} else {
	      		break; // Prevent errors with return.
	    	}
	  	}
	  	echo($c);
	}
?>