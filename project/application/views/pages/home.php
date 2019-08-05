<?php /* 
.row>.col.s12.m4*30>.card>(.card-image>img[src="<?=base_url('assets/images/product.jpg')?>"][class="materialboxed"]+.card-title)+(.card-content>p({Lorem ipsum dolor sit amet consectetur adipisicing elit,sed do eiusmod tempor incididunt}))+(.card-action>a[href="link $"]({Link $}))
*/ ?>
<?php //echo "<pre>";print_r($products);die('die');echo "</pre>"; ?>
<div class="row">
	<?php foreach ($products as $product) { ?>
		<div class="col s12 m4">
			<div class="card">
				<div class="card-image">
					<?php $img=explode('@',$product['pro_img'])[0]; ?>
					<a href="<?=base_url('product-detail')?>?product=<?=$product['pro_id']?>" target="_blank">
						<img src="<?=base_url('product/').$img?>" alt="image of <?=$product['pro_title']?>" class="responsive-img" style="height:200px;">
						<div class="card-title"><?=$product['pro_title']?></div>
					</a>
				</div>
				<div class="card-content">
					<p><?=$product['pro_desc']?></p>
				</div>
				<div class="card-action">
					<a href="<?=base_url('product-detail')?>?product=<?=$product['pro_id']?>" target="_blank">More Detail</a>
					<span>Rs: <?=$product['pro_price']?></span>
				</div>
			</div>
		</div>
	<?php } ?>
</div>