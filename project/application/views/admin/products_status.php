<div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3">
        <a class="active" href="#pending">Pending Products</a>
      </li>
      <li class="tab col s3">
        <a href="#active_user">Active Products</a>
      </li>
    </ul>
  </div>
  <div id="pending" class="col s12">
    <h4 class="center-align">Pending Products Status</h4>
    <table>
      <thead>
        <tr>
          <th>Product Owner</th>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Product Discription</th>
          <th>Product Category</th>
          <th>Product Brand</th>
          <th>Product Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($products as $product) {
            if($product['pro_status']==0){ ?>
              <tr>
                <td><?=$product['first_name'].' '.$product['last_name']?></td>
                <td><?=$product['pro_title']?></td>
                <td>
                  <?php $img=explode('@',$product['pro_img'])[0]; ?>
                  <img src="<?=base_url('product/').$img?>" alt="image of products" style="width:50px;border:1px solid #ccc">
                </td>
                <td><?=$product['pro_desc']?></td>
                <td><?=$product['cat_name']?></td>
                <td><?=$product['pro_brand']?></td>
                <td>pending</td>
                <td>
                  <a href="<?=base_url('admin/products_status')?>?ac=<?=$product['pro_id']?>">active</a>
                </td>
              </tr>
      <?php }
        } ?>
      </tbody>
    </table>
  </div>
  <div id="active_user" class="col s12">
    <h4 class="center-align">Active User Status</h4>
    <table>
      <thead>
        <tr>
          <th>Product Owner</th>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Product Discription</th>
          <th>Product Category</th>
          <th>Product Brand</th>
          <th>Product Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($products as $product) {
            if($product['pro_status']==1){ ?>
              <tr>
                <td><?=$product['first_name'].' '.$product['last_name']?></td>
                <td><?=$product['pro_title']?></td>
                <td>
                  <?php $img=explode('@',$product['pro_img'])[0]; ?>
                  <img src="<?=base_url('product/').$img?>" alt="image of products" style="width:50px;border:1px solid #ccc">
                </td>
                <td><?=$product['pro_desc']?></td>
                <td><?=$product['cat_name']?></td>
                <td><?=$product['pro_brand']?></td>
                <td>Active</td>
                <td>
                  <a href="<?=base_url('admin/products_status')?>?dac=<?=$product['pro_id']?>">Deactive</a>
                </td>
              </tr>
          <?php }
            } ?>
      </tbody>
    </table>
  </div>
</div>