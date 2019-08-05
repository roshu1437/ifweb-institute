<?php //echo "<pre>";print_r($product);die('die');echo "</pre>"; ?>
<style>
.material-placeholder{
	display:inline-block;
}
</style>
<div class="row">
	<div class="col s4">
		<?php 
			$img=explode('@',$product['pro_img']);
		?>
		<img src="<?=base_url('product/').$img[0]?>" alt="image of <?=$product['pro_title']?>" class="responsive-img">
	</div>
	<div class="col s8">
		<h2><?=$product['pro_title']?></h2>
		<table>
			<thead>
				<tr>
					<th>Brand</th>
					<th>Category</th>
					<th>Price</th>
					<th>Availblity</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?=$product['pro_brand']?></td>
					<td><?=$product['cat_name']?></td>
					<td><?=$product['pro_price']?></td>
					<td>
						<?php 
							if($product['pro_qty'] > 0){
								echo "Avail <sup>( ".$product['pro_qty'].' )</sup>';
							}else{
								echo "Sold";
							}
						?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
	<?php foreach ($img as $pic) { ?>
		<?php if($pic!=''){ ?>
			<img src="<?=base_url('product/').$pic?>" alt="image of test" style="width: 100px;display:inline-block;" class="materialboxed">
		<?php } ?>
	<?php } ?>
	<p><?=$product['pro_desc']?></p>
</div>