 <div class="row">
  <form class="col s12" action="<?=base_url('admin/add_cat')?>" method="post">
    <div class="input-field col s6">
      <input id="cat_name" name="cat_name" type="text" class="validate">
      <label for="cat_name">Enter Category Name</label>
    </div>
    <div class="input-field col s2">
      <input type="submit" name="add_cat" class="btn" value="Add Category">
    </div>
  </form>
</div>