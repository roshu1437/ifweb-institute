<?php include('links.php') ?>
<style>
  .admin_img{
    width: 50px;
    height: 50px;
    border-radius: 50px;
    object-fit: cover;
  }
</style>
<article class="col-sm-12 margin-bottom-80"> 
              <!-- Post Img --> 
              <img class="img-responsive" src="assets/images/blog-list-img-2.jpg" alt="" > 
              <!-- Tittle -->
              <div class="post-tittle left"><h2>post title</h2> 
                <!-- Post Info --> 
                <span><img src="assets/images/back22.jpg" class="admin_img" title="Admin img" alt="image of admin"></span>
                <span><i class="primary-color icon-user"></i>Admin Name</span>
                <span><i class="primary-color icon-calendar"></i> April 27, 2016</span>
                </div>
              <!-- Post Content -->
              <div class="text-left">
              <p>Post description is here.</p>             
                <!-- Post Img --> 
                <img class="img-responsive margin-top-20 margin-bottom-20" title="Post image" src="assets/images/special-bg.jpg" alt="Image of post">
                <a href="#" class="col-sm-4"><i class="primary-color fas fa-thumbs-up"></i> Verfied</a>
                <a href="#" class="col-sm-4"><i class="primary-color fas fa-trash-alt"></i> Delete</a>
                <a href="#" class="col-sm-4"><i class="primary-color fas fa-user-edit"></i> Update</a>
  </div>
</article>
<?php include('footer.php') ?>