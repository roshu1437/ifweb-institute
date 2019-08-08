<?php 
if(count($cats_search) < 1){
	mr('No Record Found But We Save Your Query And Update ASAP.');
	redirect(base_url());
} 
?>
<div class="row">
	<?php foreach ($cats_search as $search) { ?>
		<div class="col s12 m4">
			<div class="card">
				<div class="card-image">
					<?php $img=explode('@',$search['pro_img'])[0]; ?>
					<a href="<?=base_url('product-detail')?>?product=<?=$search['pro_id']?>" target="_blank">
						<img src="<?=base_url('product/').$img?>" alt="image of <?=$search['pro_title']?>" class="responsive-img" style="height:200px;">
						<div class="card-title"><?=$search['pro_title']?></div>
					</a>
				</div>
				<div class="card-content">
					<p><?=$search['pro_desc']?></p>
				</div>
				<div class="card-action">
					<a href="<?=base_url('product-detail')?>?product=<?=$search['pro_id']?>" target="_blank">More Detail</a>
					<span>Rs: <?=$search['pro_price']?></span>
				</div>
			</div>
		</div>
	<?php } ?>
</div>