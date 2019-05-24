
<form method="post" action="">
		<input type="text" name="number" placeholder="enter numbers">
		<input type="submit" name="login" value="login">
	</form>
<?php
if (isset($_POST['login'])) {
	$results = null;
 	foreach(explode(" ", $_POST['number']) AS $value) {
  	   $results += $value;
  	}
   	echo $results;
}
?>



