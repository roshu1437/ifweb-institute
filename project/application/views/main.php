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
	<div class="row">
		<div class="col s12 m3 l3">
			<?php include('inc/sidebar.php')?>
		</div>
		<div class="col s12 m9 l9">
			<!-- link open page file -->
			<?php include('pages/'.$page.'.php')?>
		</div>
	</div>
	<!-- link footer and js code file -->
	<?php include('inc/footer.php')?>
</body>
</html>