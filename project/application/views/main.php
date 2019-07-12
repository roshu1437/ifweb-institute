<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<!-- link css files file -->
	<?php include('inc/header-files.php')?>
</head>
<body>
	<!-- link header file -->
	<?php include('inc/header.php')?>
	<!-- link open page file -->
	<?php include('pages/'.$page.'.php')?>
	<!-- link footer and js code file -->
	<?php include('inc/footer.php')?>
</body>
</html>