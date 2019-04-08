<?php include('links.php') ?>
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
                <h6>Doctor Appointment</h6>
                <form>
                  <ul class="row">
                    <!-- Appointment now -->
                    <li class="col-md-3">
                      <a href="<?=$url?>appointnow.php" class="btn" style="color: #fff" role="button">APPOINTMENT NOW</a>
                    </li>
                    <!-- Show current appointment -->
                    <li class="col-md-4">
                      <a href="<?=$url?>showappoint.php" class="btn" style="color: #fff" role="button">SHOW CURRENT APPOINTMENT</a>
                    </li>
                    <!-- Show all appointment -->
                    <li class="col-md-4">
                      <a href="<?=$url?>showallappoint.php" class="btn" style="color: #fff" role="button">SHOW ALL APPOINTMENTS</a>
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