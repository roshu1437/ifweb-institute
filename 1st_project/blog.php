<?php include('links.php');
$q='
  SELECT * FROM posts 
  LEFT JOIN writers ON
  posts.writer=writers.id
  LEFT JOIN post_type ON
  posts.type=post_type.id
  WHERE posts.id="4"
';
$get_post=mysqli_query($con,$q);
$get_post=mysqli_fetch_assoc($get_post);
$curent_page=$get_post['id'];
$v=mysqli_query($con,'SELECT views FROM posts WHERE id="'.$curent_page.'"');
$cv=mysqli_fetch_assoc($v);
$cv=$cv['views']+1;
$vu=mysqli_query($con,'UPDATE posts SET views="'.$cv.'" WHERE id="'.$curent_page.'"');
$gv=mysqli_query($con,'SELECT views FROM posts WHERE id="'.$curent_page.'"');
$gv=mysqli_fetch_assoc($gv);
$get_recent=mysqli_query($con,'SELECT * FROM posts ORDER BY id DESC LIMIT 0,2');
?>
<style>
  .admin_img{
    width: 50px;
    height: 50px;
    border-radius: 50px;
    object-fit: cover;
  }
  .btn{
    padding: 5px;
    border-radius: 100px;
  }
</style>
<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>
<!-- Wrap -->
<div id="wrap"> 
  <!-- header -->
  <header>
    <div class="sticky">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo"> <a href="index.html"><img class="img-responsive" src="assets/images/logo.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li> <a href="index.html">Home</a>
              </li>
              <li class="active"><a href="mainblog.html">Blog</a>
              </li>
              <li> <a href="aboutus.html">About</a> </li>
              <li> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Platform</a>
              </li>
              <li class="dropdown"> <a href="doctors.html">Doctors</a>
              </li>
              <li> <a href="contact.html">Contact</a> </li>
              <li> <a href="inventory.html">Inventory</a></li>
            </ul>
          </div>
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><img src="assets/user.jpg" width="50px" style="margin-top: -15px"></a>
                <ul class="dropdown-menu">
                  <li>
                    <h6>Hey! User</h6>
                  </li>
                  <li><a href="billing.html">Billing</a></li>
                  <li><a href="accountinfo.html">Account_info</a></li>
                  <li><a href="#">Sign OUt</a></li>
                </ul>
              </li>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--======= SUB BANNER =========-->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h4>TAKE YOUR HEALTH SERIOUSLY</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</p>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">BLOg details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- Content -->
  <div id="content">
    <!-- Blog List -->
    <section class="blog-list blog-list-3 single-post padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <!-- Article -->
            <article> 
              <!-- Post Img --> 
              <img class="img-responsive" src="" alt="" > 
              <!-- Tittle -->
              <div class="post-tittle left"><h2><?=$get_post['title'].$get_post['id']?></h2> 
                <!-- Post Info --> 
                <span><img src="" title="Admin img" alt="image of admin"></span>
                <span><i class="primary-color icon-user"></i><?=$get_post['name']?></span>
                <span><i class="primary-color icon-calendar"></i> <?=$get_post['posttime']?></span>
                <span class="like" status="1"><i class="primary-color fas fa-thumbs-up"></i> 05</span>
                <span class="like" status="0"><i class="primary-color fas fa-comments"></i> 25</span>
                <span><i class="primary-color far fa-eye"></i> <?=$gv['views']?> views</span>
                </div>
              <!-- Post Content -->
              <div class="text-left">
                <!-- Post Img --> 
                <img class="img-responsive margin-top-20 margin-bottom-20" title="Post image" src="upload/<?=$get_post['banner']?>" alt="Image of post">
                <p><?=htmlspecialchars_decode($get_post['description'])?></p>             
                <a href="#" class="col-sm-4"><i class="primary-color fas fa-thumbs-up"></i> LIKE</a>
                <a href="#comment" class="col-sm-4"><i class="primary-color fas fa-comments"></i> COMMENT</a>
                <a href="#" class="col-sm-4"><i class="primary-color fas fa-share"></i> SHARE</a>
                <!--=======  COMMENTS =========-->
                <div class="comments margin-top-80">
                  <h5 class="shop-tittle margin-bottom-30">COMMENTS</h5>
                  <ul class="media-list padding-left-15">
                    <!--=======  COMMENTS =========-->
                    <li class="media">
                      <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="assets/images/avatar-1.jpg" alt=""> <br>
                        </a> </div>
                      <div class="media-body">
                        <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                        <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                        <a href="#comment" class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                    </li>
                    <!--=======  COMMENTS =========-->
                    <li class="media">
                      <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="assets/images/avatar-3.jpg" alt=""> <br>
                        </a> </div>
                      <div class="media-body">
                        <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                        <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                        <a href="#comment" class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                    </li>
                    <!--=======  COMMENTS =========-->
                    <li class="media padding-left-100">
                      <div class="media-left"> <a href="#" class="avatar"> <img class="media-object img-responsive" src="assets/images/avatar-2.jpg" alt=""> <br>
                        </a> </div>
                      <div class="media-body">
                        <h6 class="media-heading">William Saron <span><i class="icon-clock primary-color"></i> April 27, 2016 - 10:00 am</span></h6>
                        <p>Crack commando unit was sent to prison by a military court for a crime they didn't commit. ese men promptly escaped from a maximum security stockade to the Los Angeles. </p>
                        <a href="#comment" class="raply"><i class="icon-bubble primary-color"></i> Reply</a> </div>
                    </li>
                  </ul>
                  <hr>
                </div>
              </div>
                <form>
                  <li class="col-sm-10">
                      <input name="comment" id="comment" class="form-control margin-top-20" placeholder="Write your commen">
                  </li>
                  <li class="col-sm-2">
                      <button type="submit" class="btn margin-top-10" name="submit_comment">Send</button>
                  </li>
                </form>
            </article>
          </div>
          <!-- Sider Bar -->
          <div class="col-md-3">
            <div class="shop-sidebar side_menu">
              <!-- SEARCH -->
              <div class="search">
                <input class="form-control" type="search" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
              <!-- Recent Post -->
              <h5 class="shop-tittle margin-top-60 margin-bottom-30">recent post</h5>
              <ul class="papu-post margin-top-20">
                <?php 
                  while ($recent_post=mysqli_fetch_assoc($get_recent)) { ?>
                    <li class="media">
                      <div class="media-left"> <a href="#"> <img class="media-object" src="assets/images/sm-post-1.jpg" alt=""></a> </div>
                      <div class="media-body"> <a class="media-heading" href="#."><?=$recent_post['title']?></a> <span>Posted on <?=$recent_post['posttime']?></span> </div>
                    </li>
                <?php   }

                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php include('footer.php') ?>
<script>
  $(document).ready(function(){
    $('.like').click(function(){
    var status=$(this).attr('status');
      $.ajax({
          url:'ajax_like.php',
          type:'post',
          data:{status:status},
          success:function(get){
            var g=get.split('-');
             $('.like[status="1"]').text(g[0]);
             $('.like[status="0"]').text(g[1]);
          }
      });
    });
  });
</script>