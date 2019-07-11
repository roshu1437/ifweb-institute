<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$t?></title>
</head>
<body>
	<?php include('pages/'.$page.'.php')?>
	<h1><a href="<?=base_url()?>">Home</a></h1>
	<h1><a href="<?=base_url('about')?>">About</a></h1>
	<h1><a href="<?=base_url('contact')?>">contact</a></h1>
</body>
</html>