<!DOCTYPE html>
<html>
<head>
	<title>First Project</title>
	<?php include_once('files.php'); ?>
</head>
<body>
<?php include_once('header.php'); ?>
<!-- <div class="carousel carousel-slider"> -->
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="<?php url('assets/images/1.png')?>"></a>
    <a class="carousel-item" href="#two!"><img src="<?php url('assets/images/2.jpg')?>"></a>
    <a class="carousel-item" href="#three!"><img src="<?php url('assets/images/3.webp')?>"></a>
    <a class="carousel-item" href="#four!"><img src="<?php url('assets/images/4.jpg')?>"></a>
    <a class="carousel-item" href="#five!"><img src="<?php url('assets/images/5.png')?>"></a>
</div>
<i class="material-icons" id="back">arrow_back</i>
<i class="material-icons" id="forward">arrow_forward</i>

<?php include_once('footer.php'); ?>
</body>
</html>