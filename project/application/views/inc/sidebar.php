 <ul class="collection">
 	  <div class="input-field">
      <input id="search" type="search" class="validate">
      <label for="search">Search Here</label>
    </div>
    <li class="clearfix"></li>
    <div id="search_box">
      <!-- <a href="" class="collection-item">Test</a> -->
    </div>
    <div class="clearfix"></div>
    <div class="input-field col s12">
	    <select id="cat_select">
			<option value="" disabled selected>Search By Category</option>
			<?php foreach($cats as $cat){ ?>
				<option value="<?=$cat['cat_id']?>"><?=$cat['cat_name']?></option>
			<?php }	?>
		</select>
  	</div>
  	<li class="clearfix"></li>
  	<?php //echo "<pre>";print_r($products);echo "</pre>"; ?>
  	<?php 
  		$side_counter=1;
  		foreach($products as $sidebar){ ?>
  			<a href="<?=base_url('product-detail?product=').$sidebar['pro_id'];?>" class="collection-item"><?=$sidebar['pro_title']?></a>
  		<?php 
  			if($side_counter > 4){
  				break;
  			}
  			$side_counter++;
  		?>
  	<?php } ?>
</ul>
<form action="<?=base_url('product-search')?>" method="post" id="cat_form">
	<input type="hidden" name="category" value="" id="cat_value">
</form>
