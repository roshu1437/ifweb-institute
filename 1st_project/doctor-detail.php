<?php include('links.php') ?>
<?php 
  if(!isset($_COOKIE['login'])){
    h('login.php');
  }
  if(empty($_GET['doctor'])){
    h('index.php');
  }
  $get_user_q='SELECT * FROM signup WHERE signup_id="'.$_GET['doctor'].'"';
  $get_user_run=mysqli_query($con,$get_user_q);
  $get_user=mysqli_fetch_assoc($get_user_run);

?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">

      <title>Profile</title>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/modernizr.js"></script>

      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/SPEC/css/bootstrap.min.css">
      
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets/SPEC/css/main.css">
      <link rel="stylesheet" href="assets/SPEC/css/blue.css">
      <link rel="stylesheet" href="assets/SPEC/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/SPEC/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/SPEC/css/animate.min.css">
    <link rel="stylesheet" href="assets/SPEC/css/rateit.css">
    <link rel="stylesheet" href="assets/SPEC/css/bootstrap-select.min.css">
        <link href="assets/SPEC/css/lightbox.css" rel="stylesheet">
    

    
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/SPEC/css/font-awesome.css">

        <!-- Fonts --> 
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


  </head>
  <!-- LOADER -->
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
              <li class="active"> <a href="index.html">Home</a>
              </li>
              <li><a href="mainblog.html">Blog</a>
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
    <body class="cnt-home">



<div class="body-content outer-top-xs">
  <div class='container-fluid'>
    <div class='row single-product'>
  
      <div class='col-md-12'>
            <div class="detail-block">
        <div class="row  wow fadeInUp">
                
               <div class="col-xs-12 col-sm-6 col-md-6 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
    <img src="<?='upload/'.$get_user['img_name']?>" width="100%" height="auto">
        </div><!-- /.single-product-slider -->


    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->             
          <div class='col-sm-6 col-md-6 product-info-block'>
            <div class="product-info">
              <h1 class="name"><?=$get_user['first_name']?></h1>
              
              <div class="rating-reviews m-t-20">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="rating rateit-small"></div>
                  </div>
                  <div class="col-sm-8">
                    <div class="reviews">
                      <a href="#" class="lnk">(13 Reviews)</a>
                    </div>
                  </div>
                </div><!-- /.row -->    
              </div><!-- /.rating-reviews -->

              <div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="stock-box">
                      <span class="label">Availability :</span>
                    </div>  
                  </div>
                  <div class="col-sm-9">
                    <div class="stock-box">
                      <span class="value">ON-DUTY</span>
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div><!-- /.stock-container -->

              <div class="description-container m-t-20">
                <?=$get_user['last_name']?>
              </div><!-- /.description-container -->
            </div><!-- /.product-info -->
          </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->
                </div>
        
      

      
      </div><!-- /.col -->
      <div class="clearfix"></div>
    </div><!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->  </div><!-- /.container -->
</div><!-- /.body-content -->
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
  

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="assets/SPEC/js/jquery-1.11.1.min.js"></script>
  
  <script src="assets/SPEC/js/bootstrap.min.js"></script>
  
  <script src="assets/SPEC/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/SPEC/js/owl.carousel.min.js"></script>
  
  <script src="assets/SPEC/js/echo.min.js"></script>
  <script src="assets/SPEC/js/jquery.easing-1.3.min.js"></script>
  <script src="assets/SPEC/js/bootstrap-slider.min.js"></script>
    <script src="assets/SPEC/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/SPEC/js/lightbox.min.js"></script>
    <script src="assets/SPEC/js/bootstrap-select.min.js"></script>
    <script src="assets/SPEC/js/wow.min.js"></script>
  <script src="assets/SPEC/js/scripts.js"></script>

  

  

</body>
</html>

<?php include('footer.php') ?>