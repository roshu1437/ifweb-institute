<?php include('links.php') ?>
<?php 
  if(!isset($_COOKIE['login'])){
    h('login.php');
  }
  $get_user_q='SELECT * FROM signup WHERE login_type="1"';
  $get_user_run=mysqli_query($con,$get_user_q);
  // $get_user=mysqli_fetch_assoc($get_user_run);

?>
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
        <div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
              <li> <a href="index.html">Home</a>
              </li>
              <li><a href="mainblog.html">Blog</a>
              </li>
              <li> <a href="aboutus.html">About</a> </li>
              
              <li> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Platform</a>
              </li>
            
              <li class="active"> <a href="doctors.html">Doctors</a>
              </li>
              <li> <a href="contact.html">Contact</a> </li>
              <li> <a href="inventory.html">Inventory</a></li>
            </ul>
          </div>
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><img src="user.jpg" width="50px" style="margin-top: -15px"></a>
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
  <!-- Content -->
  <div id="content"> 
    <!-- OUR TEAM -->
    <section class="our-team light-gray-bg padding-top-150 padding-bottom-100">
      <div class="container">
        <!-- TEAM -->
        <ul class="row">
          <!-- Member -->
          <?php while ($get_user=mysqli_fetch_assoc($get_user_run)){ ?>

          <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.4s">
            <article> 
              <!-- abatar -->
              <div class="avatar"><img class="" src="<?='upload/'.$get_user['img_name']?>" alt="image of <?=$get_user['first_name']?>" > 
                <!-- Team hover -->
                <div class="team-hover">
                  <div class="position-center-center">
                    <a href="doctor-detail.php?doctor=<?=$get_user['signup_id']?>" style="color: white !important; font-size: 18px;">Visit Profile</a>
                  </div>
                </div>
              </div>
              <!-- Team Detail -->
              <div class="team-names">
                <h6><?=$get_user['first_name']?></h6>
                <p><?=$get_user['specialist_doc']?></p>
              </div>
            </article>
          </li>
        <?php } ?>
        </ul>
      </div>
    </section>
  </div>
  
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
      
      <!-- ABOUT Location -->
      <div class="col-md-3">
        <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="" >
          <p><i class="icon-pointer"></i> Street No. 12, Faisalabad 12, <br>
           Pakistan.</p>
          <p><i class="icon-call-end"></i> 0302709622</p>
          <p><i class="icon-envelope"></i> infohaseebtrust@gmail.com</p>
        </div>
      </div>
      
      <!-- HELPFUL LINKS -->
      <div class="col-md-3">
        <h6>HELPFUL LINKS</h6>
        <ul class="link">
          <li><a href="#."> Blog</a></li>
          <li><a href="#."> Doctors</a></li>
          <li><a href="#."> Inventory</a></li>
          <li><a href="#."> Platform</a></li>
          <li><a href="#."> Contact</a></li>
          <li><a href="#."> About us </a></li>
        </ul>
      </div>
      
      <!-- SHOP -->
      <div class="col-md-3">
        <h6>Health Blog</h6>
       <img src="images/health.jpg" width="100%" height="auto">
      </div>
      
      <!-- MY ACCOUNT -->
      <div class="col-md-3">
        <h6>MY ACCOUNT</h6>
        <ul class="link">
          <li><a href="#."> Login</a></li>
          <li><a href="#."> My Account</a></li>
          <li><a href="#."> My Cart</a></li>
          <li><a href="#."> Wishlist</a></li>
          <li><a href="#."> Checkout</a></li>
        </ul>
      </div>
      
      <!-- Rights -->
      
      <div class="rights">
        <p>©  Haseeb Jutt </p>
        <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
      </div>
    </div>
  </footer>
</div>
<?php include('footer.php') ?>