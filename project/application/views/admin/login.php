<div class="row">
	<form class="col s12" action="<?=base_url('admin-login')?>" method="post">
	  <div class="row">
	    <div class="input-field col s6">
	      <input name="admin_email" id="email" type="email" class="validate">
	      <label for="email">Enter Email</label>
	    </div>
	    <div class="input-field col s6">
	      <input id="password" name="admin_pass" type="password" class="validate">
	      <label for="password">Enter Password</label>
	    </div>
	  </div>
	  <div class="center-align">
	  	<input type="submit" name="admin_login" value="Login" class="btn">
	  </div>
	</form>
</div>