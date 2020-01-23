<!DOCTYPE html>
<html>
<head>
	<title>First Project</title>
	<?php include_once('files.php'); ?>
	<?php check_login(url('',true)); ?>
</head>
<body>
<?php include_once('header.php'); ?>
<div class="row">
	<!-- sidebar -->
	<div class="col l3 hide-on-med-and-down">
		<?php include_once('sidebar.php'); ?>
	</div>
	<div class="col l9">
		<form class="col s12" action="<?=url('actions/productadd.php')?>" method="post" enctype="multipart/form-data">
            <blockquote>Product Add</blockquote>
            <div class="row">
              <div class="input-field col s6">
                <input name="p_name" id="p_name" type="text" class="validate">
                <label for="p_name">Product Name</label>
              </div>
              <div class="input-field col s6">
                <input id="p_price" name="p_price" type="number" class="validate">
                <label for="p_price">Product Price</label>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s6">
			      <div class="btn">
			        <span>Image</span>
			        <input type="file" name="p_images[]" multiple accept="image/*">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" placeholder="Add At least 3 Images" type="text">
			      </div>
			  </div>
              <div class="input-field col s6">
                <select name="p_cats">
              	<?php 
              		$cats=cats_get();
              		foreach($cats as $cat) {
              			echo '<option value="'.$cat['id'].'">'.$cat['cat_name'].'</option>';
              		}
              	?>
                  </select>
                  <label>Select Category</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="p_location" name="p_location" type="text">
                <label for="p_location">Product Location</label>
              </div>
              <div class="input-field col s6">
                <input id="p_quantity" name="p_quantity" type="number">
                <label for="p_quantity">Product Quantity</label>
              </div>
            </div>
            <div class="row">
              	<div class="input-field col s6">
	                <select name="p_size">
	                    <option value="xs">Extra Small</option>
	                    <option value="s">Small</option>
	                    <option value="m">Medium</option>
	                    <option value="l">Large</option>
	                    <option value="xl">Extra Large</option>
	                  </select>
	                  <label>Product Size</label>
              	</div>
              	<div class="input-field col s6">
	                <select name="p_color">
	                    <option value="red">Red</option>
	                    <option value="green">Green</option>
	                    <option value="blue">Blue</option>
	                    <option value="black">Black</option>
	                    <option value="white">White</option>
	                  </select>
	                  <label>Product Color</label>
              	</div>
	        </div>
	        <div class="row">
				<div class="input-field col s6">
					<input id="p_contact" name="p_own_number" type="text" class="validate">
					<label for="p_contact">Product Contact Information</label>
				</div>
	        </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="p_description" name="p_description" class="materialize-textarea"></textarea>
                <label for="p_description">Product Description</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                  <label>
                    <input type="checkbox" name="p_terms" value="terms" class="filled-in">
                    <span>Accept <a href="">Terms & Conditions</a></span>
                  </label>
              </div>
            </div>
            <input type="hidden" name="p_own_id" value="<?=$d['id']?>">
            <div class="row">
              <div class="input-field col s12 center-align">
                <button name="p_add" class="btn waves-effect waves-light btn-large" type="submit" value="p_add">Add Product
                    <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
	</div>
</div>
<?php include_once('footer.php'); ?>
</body>
</html>