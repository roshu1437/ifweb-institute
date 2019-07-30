<?php 

//echo "<pre>";print_r($categories);die('die');echo "</pre>";
 ?>
<div class="row">
	<form class="col s12" action="<?=base_url('add_product')?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col s6">
			  <input id="pro_title" name="pro_title" type="text" class="validate">
			  <label for="pro_title">Product Title</label>
			</div>
			<div class="input-field col s6">
			  <input id="pro_brand" name="pro_brand" type="text" class="validate">
			  <label for="pro_brand">Product Brand</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
			  	<input id="pro_qty" name="pro_qty" type="number" class="validate">
			  	<label for="pro_qty">Product Quantity</label>
			</div>
			<div class="input-field col s6">
			  	<input id="pro_price" name="pro_price" type="number" class="validate">
			  	<label for="pro_price">Product Price</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<select name="pro_cat">
					<option value="" disabled selected>Product Category</option>
					<?php foreach ($categories as $cat) { ?>
						<option value="<?=$cat->cat_id?>"><?=$cat->cat_name?></option>
					<?php } ?>
				</select>
			</div>
			<div class="file-field input-field col s6">
				<div class="btn">
					<span>File</span>
					<input type="file" name="pro_img[]" accept=".png,.jpg,.jpeg" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="input-field s6">
				<textarea id="pro_desc" name="pro_desc" class="materialize-textarea"></textarea>
			  	<label for="pro_desc">Product Description</label>
			</div>
			<div class="clearfix"></div>
			<div class="col s12 center-align">
					<input class="btn" type="submit" name="pro_submit" value="Product Add">
			</div>
		</div>
	</form>
</div>