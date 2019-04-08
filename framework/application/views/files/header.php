<nav>
    <div class="nav-wrapper">
    	 <ul class="left hide-on-med-and-down" style="height:100%">
	    	<form>
		        <div class="input-field left">
		          <input id="search" type="search" required>
		          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		          <i class="material-icons">close</i>
		        </div>
			</form>
		</ul>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="#!" class="brand-logo center">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li>
        	<a href="">
        		<!-- <i class="material-icons">cart</i> -->
        		cart (0)
        	</a>
        </li>
        <li>
            <a href="">
                checkout
            </a>
        </li>
        <li>
        	<a href="#login" class="modal-trigger">Login</a>
        </li>
      </ul>
    </div>
 </nav>
 <ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">Javascript</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>
<!-- Modal Structure -->
<div id="login" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>
        User login
        </h4>
         <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s6">
                    <a class="active" href="#signin_form">Login</a>
                </li>
                <li class="tab col s6">
                    <a href="#signup_form">Registration</a>
                </li>
              </ul>
            </div>
            <div id="signin_form" class="col s12">
                <div class="row">
                    <form class="col s12" action="<?=base_url()?>" method="post">
                       <div class="row">
                          <div class="input-field col s12">
                            <input id="email_inline" type="email" class="validate" name="email">
                            <label for="email_inline">Email</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate" name="password">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <input type="submit" name="login" class="waves-effect waves-light btn" value="Login">
                    </form>
                </div>
            </div>
            <div id="signup_form" class="col s12">
                <div class="row">
                <form class="col s12" action="<?=base_url()?>" method="post">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" name="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" name="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <input type="submit" name="signup" class="waves-effect waves-light btn" value="signup">
                </form>
              </div>
            </div>
          </div>
        <!--  -->
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
<?php if(isset($msg)){
            if(!empty($msg['error'])){
                echo $msg['error'];
            }elseif(!empty($msg['done'])){ ?>
                <a href="<?=base_url('verify_token?token='.$msg['done'])?>">Please verify your email address</a>
    <?php   }
        } ?>