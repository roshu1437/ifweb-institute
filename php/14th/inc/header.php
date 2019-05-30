 <nav>
 	<div class="container">
		<div class="nav-wrapper">
		  <a href="#!" class="brand-logo">Logo</a>
		  <a href="#" data-target="mobile-demo" class="sidenav-trigger">
		  	<i class="material-icons">menu</i>
		  </a>
		  <ul class="right hide-on-med-and-down">
		    <li><a href="sass.html">Sass</a></li>
		    <li><a href="badges.html">Components</a></li>
		    <li><a href="collapsible.html">Javascript</a></li>
		    <li><a href="mobile.html">Mobile</a></li>
		    <li><a class="modal-trigger btn" href="#login">Login/Signup</a></li>
		  </ul>
		</div>
	</div>
</nav>
<ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">Javascript</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>


<div id="login" class="modal">
    <div class="modal-content">
    	<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s6">
		        	<a class="active" href="#ulogin">Login</a>
		        </li>
		        <li class="tab col s6">
		        	<a href="#usignup">Signup</a>
		        </li>
		      </ul>
		    </div>
		    <div id="ulogin" class="col s12">
		    	<h2 class="center-align">User Login Panel</h2>
		    	<div class="row">
		    		<div class="container">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="login_email" type="email" class="validate">
					          <label for="login_email">Email</label>
					          <span class="helper-text" data-error="wrong" data-success="Done"></span>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="login_password" type="password" class="validate">
					          <label for="login_password">Password</label>
					        </div>
					      </div>
						   <div class="center-align">
						   	<input type="submit" class="btn btn-large" value="Login">
						   </div>
					    </form>
					</div>
				</div>
		    </div>
		    <div id="usignup" class="col s12">
		    	<h2 class="center-align">User Signup Panel</h2>
		    	<div class="row">
		    		<div class="container">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Placeholder" id="first_name" type="text" class="validate" data-length="20">
					          <label for="first_name">First Name</label>
					          <span class="helper-text" data-error="wrong" data-success="Done"></span>
					        </div>
					        <div class="input-field col s12">
					          <input id="last_name" type="text" class="validate" data-length="20">
					          <label for="last_name">Last Name</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="email" type="email" class="validate">
					          <label for="email">Email</label>
					          <span class="helper-text" data-error="wrong" data-success="Done"></span>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="password" type="password" class="validate">
					          <label for="password">Password</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea id="textarea1" class="materialize-textarea"></textarea>
					          <label for="textarea1">Textarea</label>
					        </div>
					      </div>
					      <div class="file-field input-field">
						      <div class="btn">
						        <span>File</span>
						        <input type="file">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						   </div>
						   <div class="center-align">
						   	<input type="submit" class="btn btn-large waves-effect waves-light" value="Signup">
						   </div>
					    </form>
					</div>
				</div>
		    </div>

		</div>
    </div>
 </div>