<?php include('links.php') ?>
<!-- LOADER -->
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
                <form action="signup_action.php" method="post" enctype="multipart/form-data">
                  <ul class="row">
                    <!--FIRST NAME -->
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
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *CONFIRM PASSWORD
                        <input type="password" name="re-pass" value="" placeholder="">
                      </label>
                    </li>
                    <li class="col-md-6"> 
                      <!-- CNIC -->
                      <label>*CNIC
                        <input type="number" name="cnic" value="" placeholder="">
                      </label>
                    </li>
                     <li class="col-md-6"> 
                      <!-- ADDRESS -->
                      <label>*ADDRESS
                        <input type="text" name="address" value="" placeholder="">
                      </label>
                    </li>

                    <li class="col-md-6"> 
                      <!-- DEGREE -->
                      <label>*DEGREE
                        <input type="text" name="degree" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- GENDER -->
                    <li class="col-md-6">
                      <label> *GENDER
                        <select class="selectpicker" name="gender">
                          <option value="male">MALE</option>
                          <option value="female">FEMALE</option>
                          <option value="other">OTHERS</option>
                        </select>
                      </label>
                    </li>
                    <!-- TOWN/CITY -->
                    <li class="col-md-6">
                      <label>*SPECIALITY
                        <input type="text" name="town" value="" placeholder="">
                      </label>
                    </li>
                    <!-- IMAGE -->
                    <li class="col-md-6">
                      <label for="this">
                        <span type="button" class="btn">SELECT IMAGE</span>
                        <input type="file" name="dr_img" id="this" style="display: none;">
                      </label>
                    </li>
                    <!-- SUBMIT -->
                    <li class="col-md-6">
                      <button type="submit" name="register" class="btn">REGISTER NOW</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include('footer.php') ?>