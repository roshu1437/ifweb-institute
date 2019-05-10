<?php 
	// echo '<pre>';
	// echo $_POST['user'];
	// echo '<br>';
	// echo $_POST['pass'];
	// echo '<br>';
	// echo $_POST['email'];
	// print_r($_GET);
	// empty();
	// if($_POST['user'])
	// if($_POST['user']=='')
	// if(empty($_POST['user'])){
	// 	echo 'please add user name';
	// }else{
	// 	echo 'Done';
	// }
	if(!empty($_POST['user'])){
		echo 'Done';
	}else{
		echo 'please add user name';
		die;
	}

	echo '<pre>';
	print_r($_POST);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Lecture Download</title>
</head>
<body>
	<a download="download" href="layout.html">HTML Layout</a>
	<a download="download" href="1st.html">Lecture 1</a>
	<a download="download" href="2nd.html">Lecture 2</a>
	<a download="download" href="3rd.html">Lecture 3</a>
	<a download="download" href="4th.html">Lecture 4</a>
</body>
</html>