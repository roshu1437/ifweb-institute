<?php include('links.php');
$writer=mysqli_query($con,'SELECT * FROM writers');
$type=mysqli_query($con,'SELECT * FROM post_type');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Page</title>
	<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<body>
<style>
	img{
		width: 75%;
		height: 250px;
		object-fit: cover;
		border: 1px solid black;
	}
</style>
<div class="comments margin-top-20 col-sm-12">
<h5 class="shop-tittle margin-top-20">create your post</h5>
    <form action="post_action.php" class="padding-left-15" method="post" enctype="multipart/form-data" id="form">
        <ul class="row">
	        <li class="col-sm-3">
	            <label>Admin Name
	                <select class="form-control" name="post_writer">
	                	<option>SELECT Writer</option>
	                    <?php 
	                    	while ($writer_get=mysqli_fetch_assoc($writer)) { ?>
	                    		<option value="<?=$writer_get['id']?>"><?=$writer_get['name']?></option>
	                    <?php	} ?>
	                </select>
	            </label>
	        </li>
	        <li class="col-sm-3">
	            <label>Post title
	                <input type="text" class="form-control" name="post_title" placeholder="Enter Post Title">
	            </label>
	        </li>
	        <li class="col-md-3">
	            <label> Post type
	                <select class="form-control" name="post_type">
	                	<option>SELECT POST TYPE</option>
	                	<?php 
	                    	while ($type_get=mysqli_fetch_assoc($type)) { ?>
	                    		<option value="<?=$type_get['id']?>"><?=$type_get['type']?></option>
	                    <?php	} ?>
	                </select>
	            </label>
	        </li>
	         <li class="col-md-3">
	            <input type="text" class="form-control" name="post_read" placeholder="Reading time">
	        </li>
	        <li class="col-sm-12">
		        <label>Post Description
		    	    <textarea  name="post_description" class="form-control" placeholder="Post Description"></textarea>
		        </label>
	        </li>
	        <li class="col-md-6">
	            <label for="this">
	            <span type="button" class="btn">SELECT IMAGE OF THUMBNAIL</span>
	                <input type="file" name="t_img" id="this" style="display: none;">
	            </label>
	        </li>
	        <li class="col-md-6">
	            <label for="it">
	            <span type="button" class="btn">SELECT IMAGE OF BANNER</span>
	                <input type="file" name="b_img" id="it" style="display: none;">
	            </label>
	        </li>
	        <li class="col-md-6">
	        	<img src="" alt="Image of thumbnail">
	        </li>
	        <li class="col-md-6">
	        	<img src="" alt="Image of banner">
	        </li>
            <li class="col-sm-12">
                <button type="button" class="btn margin-top-30" name="submit_post">Submit your post</button>
            </li>
        </ul>
    </form>
</div>
<?php include('footer.php')?>
<script>
	$(document).ready(function(){
		CKEDITOR.replace('post_description');
		$('[name="submit_post"]').click(function(){
			var data = CKEDITOR.instances.post_description.getData();
			console.log(data);
			$('#form').submit();
		})
	});
</script>
</body>
</html>
