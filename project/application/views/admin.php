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
	<?php include('admin/header.php')?>
	<div class="row">
		<div class="col s12 m4 l4">
			<?php include('admin/sidebar.php')?>
		</div>
		<div class="col s12 m8 l8">
			<!-- link open page file -->
			<?php include('admin/'.$page.'.php')?>
		</div>
	</div>
	<!-- link footer and js code file -->
	<?php include('admin/footer.php')?>
</body>
</html>