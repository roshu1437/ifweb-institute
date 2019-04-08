<?php 
$con=mysqli_connect('localhost','root','','pagination');
if(!$con){
	echo "DataBase Not Connect";
	die;
}
// for ($i=81; $i < 160 ; $i++) { 
// 	$in='INSERT INTO posts SET name="Title '.$i.'"';
// 	mysqli_query($con,$in);
// }
// die;
$get_all='SELECT name FROM posts';
$get_all=mysqli_query($con,$get_all);
$gc=mysqli_num_rows($get_all);
$per_page=10;
$pageoff_set=5;
$off_set=0;
$get_page='';
if(isset($_GET['page'])){
	$get_page=$_GET['page'];
	$off_set=$per_page*($get_page-1);
}else{
	$get_page=1;
}
$pagq='SELECT * FROM posts LIMIT '.$off_set.','.$per_page;
$pageqr=mysqli_query($con,$pagq);
?>

<html>
<head>
	<title>Title</title>
</head>
<body>
	<?php while($res=mysqli_fetch_assoc($pageqr)){ ?>
		<span><?=$res['name']?> </span>
	<?php }	?>
	<br>
	<?php 
		if($get_page > 1){
			$first_page=$get_page-1;
			echo  '<a href="http://localhost/web8.30/php/pagination.php?page='.$first_page.'"> $first_page</a><br>';
		}
		$pagination_link=$gc/$per_page;
		for($i=1;$i<=$pagination_link;$i++){
			echo '<a href="http://localhost/web8.30/php/pagination.php?page='.$i.'"> Link'.$i.'</a>';
		}	

		if($get_page < $pagination_link-1){
			$first_page=$get_page+1;
			echo  '<br><a href="http://localhost/web8.30/php/pagination.php?page='.$first_page.'"> Next</a><br>';
		}


	?>
	


</body>
</html>