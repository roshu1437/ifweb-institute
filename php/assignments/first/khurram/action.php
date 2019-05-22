<?php 
	if(isset($_POST['login'])){
		if (!empty($_POST['pass'])) {
			strlen($_POST['pass']);
			if (strlen($_POST['pass']) == 1) {
				for ($i = 1; $i <= 10 ; $i++) { 
					echo '1 * '. $i .' = '.$i*1;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 2) {
				for ($i = 1; $i <= 10 ; $i++) { 
					echo '2 * '.$i.' = '.$i*2;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 3) {
				for ($i=1; $i <=10 ; $i++) { 
					echo '3 * '. $i .' = '.$i*3;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 4) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '4 * '.$i.' = '.$i*4;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 5) {
				for ($i=01; $i <= 10 ; $i++) { 
					echo '5 * '.$i.' = '.$i*5;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 6) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '6 * '.$i.' = '.$i*6;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 7) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '7 * '.$i.' = '.$i*7;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 8) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '8 * '.$i.' = '.$i*8;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 9) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '9 * '.$i.' = '.$i*9;
					echo "<br>";
				}exit();
			}
			if (strlen($_POST['pass']) == 10) {
				for ($i=1; $i <= 10 ; $i++) { 
					echo '10 * '.$i.' = '.$i*10;
					echo "<br>";
				}exit();
			}
			echo "only 10 value";
		}else
			{
				echo 'please give only intiger form';
			}
	}
	
?>