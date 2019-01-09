<?php
include('include/header.php');
?>
<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Login</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Login</span></p>
        
  </div>
</div>
<!-- Teachers Area section -->
<section class="login-area" style="margin-top: 80px; margin-bottom: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3" style="background-color: #d3d1ea6b;">
				<form action="#" class="eduread-register-form text-center">
					<p class="lead" style="margin-top: 30px;">Welcome Back</p>					
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="Username *" name="name" type="text">
					</div>
					<div class="form-group">
					  	<input class="required form-control" placeholder="Password *" name="password" type="password">
					</div>		
					<div class="form-group register-btn">
					 	<submit class="btn btn-primary btn-lg">Register</submit>
					</div>
					<a href="forgot-password.html"><strong>Forgot password?</strong></a>		
					<p>Not a member? <a href="register.html"><strong>Join today</strong></a></p>	
				</form>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->


<?php
include('include/footer.php');
?>

