<!-- https://www.screencast.com/t/wRku15jE -->
<nav>
  <div class="container2">
    <div class="nav-wrapper">
      <a href="<?=url()?>" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?=url()?>">Home</a></li>
        <li><a href="<?=url('about.php')?>">About</a></li>
        <li><a href="<?=url('contact.php')?>">contact</a></li>

        <?php if(isset($_COOKIE['login_auth'])){ 
            $d=user_login($_COOKIE['login_auth']);
            echo '<li>Welcome '.$d['last_name'].'</li>';
          ?>
            <li><a class="waves-effect waves-light" href="<?=url('actions/signup.php?logout=1')?>">Logout</a></li>
            <li><a class="waves-effect waves-light btn" href="<?=url('productadd.php')?>">Add Product</a></li>
        <?php }else{ ?>

          <li><a class="waves-effect waves-light btn modal-trigger" href="#login_signup">login</a></li>
          
        <?php } ?>
        <!-- Dropdown Trigger -->
        <li>
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li class="divider"></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">Javascript</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>
<div id="login_signup" class="modal">
    <div class="modal-content">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s6"><a class="active" href="#login">Login</a></li>
            <li class="tab col s6"><a href="#signup">Signup</a></li>
          </ul>
        </div>
        <div id="login" class="col s12">
          <form class="col s12" action="<?=url('actions/signup.php')?>" method="post">
            <blockquote>Login Form</blockquote>
            <div class="row">
              <div class="input-field col s12">
                <input id="lemail" type="email" name="email" class="validate">
                <label for="lemail">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="lpassword" type="password" name="pass" class="validate">
                <label for="lpassword">Password</label>
              </div>
            </div>
            <div class="center-align">
              <button name="u_login" class="btn waves-effect deep-orange-text waves-light" type="submit" value="u_login">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
        <div id="signup" class="col s12">
          <div class="row">
              <form class="col s12" action="<?=url('actions/signup.php')?>" method="post">
                <blockquote>Signup Form</blockquote>
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Placeholder" name="f_name" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" name="l_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input id="email" name="u_email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s6">
                    <select name="u_gender">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                      </select>
                      <label>Gender</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input id="password1" name="u_pass" type="password" class="validate" data-length="20">
                    <label for="password1">Password</label>
                    <i class="material-icons prefix show_pass">remove_red_eye</i>
                  </div>
                  <div class="input-field col s6">
                    <input id="password2" name="u_rpass" type="password" class="validate" data-length="20">
                    <label for="password2">Confirm Password</label>
                    <i class="material-icons prefix" onclick="rp('15')">lock</i>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea1" name="u_address" class="materialize-textarea"></textarea>
                    <label for="textarea1">Address</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                      <label>
                        <input type="checkbox" name="u_terms" value="terms" class="filled-in">
                        <span>Accept <a href="">Terms & Conditions</a></span>
                      </label>
                  </div>
                  <div class="input-field col s6">
                      <label>
                        <input type="checkbox" name="u_subscription" value="u_subs" class="filled-in">
                        <span>Allow Email Notifier</span>
                      </label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 center-align">
                    <div class="col l4"></div>
                    <div class="g-recaptcha" data-sitekey="6LcKUs8UAAAAAAPlo-dBSeVh38jybZCu0jXqq8MR" data-badge="inline"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 center-align">
                    <button name="u_signup" class="btn waves-effect waves-light btn-large" type="submit" value="u_signup">SignUp
                        <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>            
  </div>