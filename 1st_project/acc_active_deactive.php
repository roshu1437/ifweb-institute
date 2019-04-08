<?php include('links.php'); ?>
<?php 
	$dr_account='SELECT * FROM signup WHERE login_type="1" && pat_discharge="1"';
	$dr_account_run=mysqli_query($con,$dr_account);
	if(!$dr_account_run){
	  echo "<h2>server busy.</h2>";
	  exit();
	}
	$pat_account='SELECT * FROM signup WHERE login_type="2" && pat_discharge="1"';
	$pat_account_run=mysqli_query($con,$pat_account);
	if(!$pat_account_run){
	  echo "<h2>server busy.</h2>";
	  exit();
	}
	$dr_acitve='SELECT * FROM signup WHERE pat_discharge="2"';
	$dr_acitve_run=mysqli_query($con,$dr_acitve);
	if(!$dr_account_run){
	  echo "<h2>server busy.</h2>";
	  exit();
	}
	$pat_active='SELECT * FROM signup WHERE pat_discharge="3"';
	$pat_active_run=mysqli_query($con,$pat_active);
	if(!$pat_active_run){
	  echo "<h2>server busy.</h2>";
	  exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>To deactive an account.</title>
</head>
<style>
	.jumbotron{
		width: 100%;
	}
	div{
		float: left;
	}
	.main{
		background: #009688a6;
		width: 45%;
		height: auto;
		box-sizing: border-box;
		padding: 20px;
		margin: 20px;
		border: 2px solid black;
		border-radius: 10px;
	}
	p{
		color: #000;
	}
	input,[name="dr-account"]{
		width: 100%;
		padding: 6px;
		margin-top: 5px;
		border-radius: 5px;
		font-size: 18px;
		border: 1px solid #000;
	}
	[type="submit"]{
		background: #00bcd4;
		transition: 1s;
	}
	[type="submit"]:hover{
		background: #795548;
	}
</style>
<body>
<div class="jumbotron">
	<!-- Doctor account deactive -->
	<div class="main">
		<h2>
			 <?php 
                  if(isset($_SESSION['error'])){
                    echo '<span style="color:red;">'.$_SESSION['error'].'</span>';
                  }elseif(isset($_SESSION['done'])){
                    echo $_SESSION['done'];
                  }else{
                    echo "doctor's active account here.";
                  }
                ?>
		</h2>
		<hr>
		<p>Select a Doctor account to deactive it.</p>
		<form action="deactive.php" method="post">
			<select class="selectpicker col-md-6" name="dr-account" >
              <?php 
              while($res=mysqli_fetch_assoc($dr_account_run)){ ?>
                 <option value="<?=$res['signup_id']?>"><?=$res['first_name'].' '.$res['last_name']?></option>
              <?php }
              ?>
          </select>
			<input type="submit" name="doc-deactive" value="Deactive">
		</form>
	</div>
	<!-- Patient account deactive -->
	<div class="main">
		<h2>
			 <?php 
                  if(isset($_SESSION['error_pt_deactive'])){
                    echo '<span style="color:red;">'.$_SESSION['error_pt_deactive'].'</span>';
                  }elseif(isset($_SESSION['done_pt_deactive'])){
                    echo $_SESSION['done_pt_deactive'];
                  }else{
                    echo "Patient's active account here.";
                  }
                ?>
		</h2>
		<hr>
		<p>Select a Patient account to deactive it.</p>
		<form action="deactive.php" method="post">
			<select class="selectpicker col-md-6" name="pt-account" >
              <?php 
              while($res=mysqli_fetch_assoc($pat_account_run)){ ?>
                 <option value="<?=$res['signup_id']?>"><?=$res['first_name'].' '.$res['last_name']?></option>
              <?php }
              ?>
          </select>
			<input type="submit" name="pt-deactive" value="Deactive">
		</form>
	</div>
</div>
<div class="jumbotron">
	<!-- Doctor account active -->
	<div class="main">
		<h2>
			 <?php 
                  if(isset($_SESSION['error_dr_active'])){
                    echo '<span style="color:red;">'.$_SESSION['error_dr_active'].'</span>';
                  }elseif(isset($_SESSION['done_dr_active'])){
                    echo $_SESSION['done_dr_active'];
                  }else{
                    echo "Doctor's deactive account here.";
                  }
                ?>
		</h2>
		<hr>
		<p>Select a Doctor account to active it.</p>
		<form action="deactive.php" method="post">
			<select class="selectpicker col-md-6" name="dr-account" >
              <?php 
              while($res=mysqli_fetch_assoc($dr_acitve_run)){ ?>
                 <option value="<?=$res['signup_id']?>"><?=$res['first_name'].' '.$res['last_name']?></option>
              <?php }
              ?>
          </select>
			<input type="submit" name="doc-active" value="Active">
		</form>
	</div>
	<!-- Patient account active -->
	<div class="main">
		<h2>
			 <?php 
                  if(isset($_SESSION['error_pt_active'])){
                    echo '<span style="color:red;">'.$_SESSION['error_pt_active'].'</span>';
                  }elseif(isset($_SESSION['done_pt_active'])){
                    echo $_SESSION['done_pt_active'];
                  }else{
                    echo "Patient's deactive account here.";
                  }
                ?>
		</h2>
		<hr>
		<p>Select a Patient account to active it.</p>
		<form action="deactive.php" method="post">
			<select class="selectpicker col-md-6" name="pt-account" >
              <?php 
              while($res=mysqli_fetch_assoc($pat_active_run)){ ?>
                 <option value="<?=$res['signup_id']?>"><?=$res['first_name'].' '.$res['last_name']?></option>
              <?php }
              ?>
          </select>
			<input type="submit" name="pt-active" value="Active">
		</form>
	</div>
</div>
</body>
</html>
<?php include('footer.php') ?>