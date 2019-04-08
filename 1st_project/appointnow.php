<?php include('links.php') ?>
<?php 
if(!isset($_COOKIE['login'])){
  h('login.php');
}
$gt_run=mysqli_query($con,'SELECT * FROM time_table WHERE avail="1"');
$get_user_q='SELECT * FROM signup WHERE signup_id="'.$_COOKIE['login'].'"';
$get_user_run=mysqli_query($con,$get_user_q);
$get_user=mysqli_fetch_assoc($get_user_run);
echo date('y-m-d h,i,s');


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
                      echo '<span style="color:red">'.$_SESSION['error'].'</span>';
                    }else if(isset($_SESSION['done'])){
                      echo $_SESSION['done'];
                    }else{
                      echo "Doctor Appointment";
                    }
                  ?>
                </h6>
                <form>
                  <ul class="row">
                    <!--SIGNUP ID -->
                    <li class="col-md-6">
                      <label> *SIGNUP ID
                        <input type="number" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                     <!-- PAITENT FULL NAME -->
                    <li class="col-md-6">
                      <label> *PAITENT FULL NAME
                        <input type="text" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- AGE -->
                    <li class="col-md-6"> 
                      <label>*AGE
                        <input type="number" name="degree" value="" placeholder="">
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
                    <!-- CNIC -->
                    <li class="col-md-6"> 
                      <label>*CNIC
                        <input type="text" name="cnic" value="" placeholder="">
                      </label>
                    </li>
                    <!-- ADDRESS -->
                     <li class="col-md-6"> 
                      <label>*ADDRESS
                        <input type="text" name="address" value="" placeholder="">
                      </label>
                    </li>
                    <!-- DEPARTMENT -->
                    <li class="col-md-6"> 
                      <label>*DEPARTMENT
                        <input type="text" name="degree" value="" placeholder="">
                      </label>
                    </li>
                    <!-- DOCTOR NAME -->
                    <li class="col-md-6"> 
                      <label>*DOCTOR NAME
                        <input type="text" name="degree" value="" placeholder="">
                      </label>
                    </li>
                    <!-- DATE -->
                    <li class="col-md-6"> 
                      <label>*DATE
                        <select id="date_picker" class="selectpickera" name="gender">
                          <option>SELECT TIME</option>
                          <?php 
                            while($get_time=mysqli_fetch_assoc($gt_run)){ 
                                $get_date=explode('@',$get_time['time']);
                              ?>
                              <option><?=$get_date[0]?></option>
                            <?php }
                           ?>
                        </select>
                      </label>
                    </li>
                    <!-- TIME -->
                    <li class="col-md-6">
                      <label> *GENDER
                        <select id="time" class="selectpickera" name="gender">
                          <option>SELECT TIME</option>
                          
                        </select>
                      </label>
                    </li>
                    <!-- GENDER -->
                    <li class="col-md-6">
                      <label> *GENDER
                        <select class="selectpicker" name="gender">
                          <option>MALE</option>
                          <option>FEMALE</option>
                          <option>OTHERS</option>
                        </select>
                      </label>
                    </li>
                    <!-- SUBMIT -->
                    <li class="col-md-6">
                      <button type="submit" name="register" class="btn">APPOINTMENT NOW</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php include('footer.php') ?>