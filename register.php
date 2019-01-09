<?php
	include('include/header.php');

	//function for show messages

	function showMessage($msg){
		if ($msg == 1) {
			print "<p class='alert alert-success'>Registration Successfull</p>";
		}
		if ($msg == 2) {
			print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
		}
	}
?>
<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Registration</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Registration</span></p>
        
  </div>
</div>

<!-- Teachers Area section -->
<section class="register-area" style="margin-top: 60px; margin-bottom: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3"style="background-color: #d3d1ea6b;">
				<form action="backend/user_registration/registration.php" class="eduread-register-form " method="post">
					<p class="lead text-center" style="margin-top: 30px;">Register New Account</p>
					<?php 
						if (isset($_GET['msg'])) {
							showMessage($_GET['msg']);
						}						
					?>
					<div class="form-group">
					 	<input autocomplete="off" class="form-control" placeholder="First Name *" name="f_name" type="text">
					</div>
					<div class="form-group">
					 	<input autocomplete="off" name="l_name" class="form-control" placeholder="Last Name" type="text">
					</div>	
					<div class="form-group">
					 	<input class="required form-control" name="email" placeholder="Email *" type="email">
					</div>					
					
					<div class="form-group">
					  <input class="required form-control" name="password" placeholder="Password *"  type="password">
					</div>		
					<div class="form-group"> 
					  	<input autocomplete="off" name="mobile" class="required form-control" placeholder="Mobile Number" type="text">
					</div>

					<textarea class="form-control" name="about" placeholder="About / Bio" name="bio" rows="3" style="resize: none;"></textarea>

					<div class="form-group register-btn text-center" style="margin-top: 30px;">
					 	<input type="submit" class="btn btn-primary btn-lg" name="register" value="Register">
					</div>			
				</form>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->




<?php
include('include/footer.php');
?>
