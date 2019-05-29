<!DOCTYPE html>
<html>
<head>
	<title>It's Home Page</title>
	<?php require_once('inc/links.php'); ?>
</head>
<body>
	<?php require_once('inc/header.php'); ?>
	<div class="container-old">
		<div class="row">
			<div class="col s12 m3 l3">
				<?php require_once('inc/sidebar.php'); ?>
			</div>
			<div class="col s12 m9 l9">
				<?php require_once('pages/main.php'); ?>
			</div>
		</div>
	</div>
	<?php require_once('inc/footer.php'); ?>
</body>
</html>