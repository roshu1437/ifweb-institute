 <ul class="collection">
 	<a href="<?=base_url('admin/user')?>" class="collection-item">User Activation <span class="new badge red" data-badge-caption="Pending user"><?=$this->data->get_pending_user()?></span></a>
 	<a href="<?=base_url('admin/products_status')?>" class="collection-item">Products Activation <span class="new badge red" data-badge-caption="Pending Products"><?=$this->data->get_pending_products()?></span></a>
 	<a href="<?=base_url('admin/add_cat')?>" class="collection-item">Add Category</a>
</ul>