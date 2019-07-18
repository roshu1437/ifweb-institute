<!-- Dropdown Structure -->
<ul id="navbar_dropdown" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="<?=base_url()?>" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li class="<?=@$home?>">
        <a href="<?=base_url()?>">Home</a>
      </li>
      <li class="<?=@$about?>">
        <a href="<?=base_url('about')?>">About</a>
      </li>
      <li class="<?=@$contact?>">
        <a href="<?=base_url('contact')?>">Contact</a>
      </li>
      <li class="<?=@$contact?>">
        <a class="modal-trigger" href="#login_or_signup">Login & SignUp</a>
      </li>
      <!-- Dropdown Trigger -->
      <li>
        <a class="dropdown-trigger" href="#!" data-target="navbar_dropdown">Inner Links
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- login and signup area -->
  <!-- Modal Structure -->
<div id="login_or_signup" class="modal">
  <div class="modal-content">
    <!-- add tabs -->
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6">
            <a class="active" href="#Login_tab">Login</a>
          </li>
          <li class="tab col s6">
            <a href="#signup_tab">SignUp</a>
          </li>
        </ul>
      </div>
      <!-- login tab style -->
      <div id="Login_tab" class="col s12">
        <form class="col s12" action="<?=base_url('user')?>" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input id="login_email" type="text" class="validate">
              <label for="login_email">Enter Email</label>
            </div>
            <div class="input-field col s12">
              <input id="login_password" type="password" class="validate">
              <label for="login_password">Enter Password</label>
            </div>
          </div>
          <div class="center-align">
            <input type="submit" class="waves-effect waves-light btn" value="Login">
          </div>
        </form>
      </div>
      <!-- user signUp style -->
      <div id="signup_tab" class="col s12">
        <div class="row">
          <form class="col s12" action="<?=base_url('user')?>" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input id="signup_first_name" type="text" class="validate" name="signup_fn">
                <label for="signup_first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input name="signup_ln" id="signup_last_name" type="text" class="validate">
                <label for="signup_last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="signup_email" id="signup_email" type="email" class="validate">
                <label for="signup_email">Enter Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="signup_pass" id="signup_password" type="password" class="validate"  data-length="10">
                <label for="signup_password">Enter Password</label>
              </div>
              <div class="input-field col s6">
                <input name="signup_cpass" id="signup_re_password" type="password" class="validate" data-length="10">
                <label for="signup_re_password">Confirm Password</label>
              </div>
            </div>
            <div class="center-align">
              <input name="signup_submit" type="submit" class="waves-effect waves-light btn" value="signup">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 

echo $this->session->msg;

// echo "<pre>";print_r($_SESSION['msg']);echo "</pre>";
// session_destroy();
?>

        