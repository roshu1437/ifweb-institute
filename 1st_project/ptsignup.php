<?php include('links.php') ?>
<?php 
$inch_query='SELECT * FROM signup WHERE login_type="1"';
$inch_query_run=mysqli_query($con,$inch_query);
if(!$inch_query_run){
  sh('error','Server Busy','ptsignup.php');
}

?>
<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>
<!-- Wrap -->
<div id="wrap"> 
  <!-- Content -->
  <div id="content"> 
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-20 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info register">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-12">
                <h6>
                <?php 
                  if(isset($_SESSION['error'])){
                    echo '<span style="color:red;">'.$_SESSION['error'].'</span>';
                  }elseif(isset($_SESSION['done'])){
                    echo $_SESSION['done'];
                  }else{
                    echo "SignUp";
                  }
                ?>
                </h6>
                <form action="signup_action.php" method="post">
                  <ul class="row">
                    <!-- FIRST NAME -->
                    <li class="col-md-6">
                      <label> *FIRST NAME
                        <input type="text" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                     <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *LAST NAME
                        <input type="text" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL ADDRESS
                        <input type="text" name="email" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *PHONE
                        <input type="text" name="postal-code" value="" placeholder="">
                      </label>
                    </li>
                    <!-- CREDITE CARD -->
                    <li class="col-md-6">
                      <label> *CREDITE CARD
                        <input type="number" name="card_number" value="" placeholder="">
                      </label>
                    </li>
                    <!-- PASSWORD -->
                    <li class="col-md-6">
                      <label> *PASSWORD
                        <input type="password" name="pass" value="" placeholder="">
                      </label>
                    </li>
                    <!-- CONFIRM PASSWORD -->
                    <li class="col-md-6">
                      <label> *CONFIRM PASSWORD
                        <input type="password" name="re-pass" value="" placeholder="">
                      </label>
                    </li>
                      <!-- ADDRESS -->
                    <li class="col-md-6"> 
                      <label>*ADDRESS
                        <input type="text" name="address" value="" placeholder="">
                      </label>
                    </li>
                     <!-- CNIC -->
                    <li class="col-md-6"> 
                      <label>*CNIC
                        <input type="number" name="cnic" value="" placeholder="">
                      </label>
                    </li>
                    <!-- COUNTRY -->
                    <li class="col-md-6">
                      <label> *GENDER
                        <select class="selectpicker" name="gender">
                          <option>MALE</option>
                          <option>FEMALE</option>
                          <option>OTHERS</option>
                        </select>
                      </label>
                    </li>
                    <!-- SECTION -->
                    <li class="col-md-6">
                      <label>*SECTION
                        <input type="text" name="section" value="" placeholder="">
                      </label>
                    </li>
                    <!-- TEACHER -->
                    <li class="col-md-6">
                      <label> *INCHARGE
                        <select class="selectpicker" name="incharge">
                          <?php 
                          while($res=mysqli_fetch_assoc($inch_query_run)){ ?>
                            <option value="<?=$res['signup_id']?>"><?=$res['first_name'].' '.$res['last_name']?></option>
                         <?php }
                          ?>
                        </select>
                      </label>
                    </li>
                    <!-- GUARDIAN -->
                    <li class="col-md-6">
                      <label>*GUARDAIN
                        <input type="text" name="guardain" value="" placeholder="">
                      </label>
                    </li>
                    <!-- IMAGE -->
                    <li class="col-md-6">
                      <label for="this">
                        <span type="button" class="btn">SELECT IMAGE</span>
                        <input type="file" name="dr_img" id="this" style="display: none;">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" name="pregister" class="btn">REGISTER NOW</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <footer>
    <div class="container"> 
      <!-- ABOUT Location -->
      <div class="col-md-12" align="center">
        <div class="about-footer"> <img class="margin-bottom-30" src="<?=$url?>assets/images/logo-foot.png" alt="" >
          <p><i class="icon-pointer"></i> Street No. 12, Newyork 12, <br>
            MD - 123, USA.</p>
          <p><i class="icon-call-end"></i> 1.800.123.456789</p>
          <p><i class="icon-envelope"></i> info@ecoshop.com</p>
        </div>
      </div>
      <!-- Rights -->
      <div class="rights">
        <p>©  2019 Haxeeb Xadaqat </p>
        <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
      </div>
    </div>
  </footer>
</div>
<?php include('footer.php') ?>