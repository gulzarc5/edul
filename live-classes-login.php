<?php
include('include/header.php');
?>

<div class="container tophead">
    <div class="row text-center">
    <h1 style="">Live Classes</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Live Classes</span></p>
        
  </div>
</div>

<section class="login-area" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="web_site_php/user_login_check.php" method="post" class="eduread-register-form text-center">
					<p class="lead">Login Form</p>	
						<input  class="form-control" name="page" value="1" type="hidden">				
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="Enter Email *" name="email" type="text" required>
					</div>
					<div class="form-group">
					  	<input class="required form-control" placeholder="Enter Password *" name="password" type="password" required>
					</div>		
					<div class="form-group register-btn">
					 	<input class="btn btn-primary btn-lg" type="submit" name="Register" value="Log In" >
					</div>
					<a href="forgot-password.html"><strong>Forgot password?</strong></a>		
					<p>Not a member? <a href="register.html"><strong>Join today</strong></a></p>		
				</form>
			</div>												
		</div>
	</div>
</section>



<?php
include('include/footer.php');
?>

	<script type="text/javascript">
    $(document).ready(function() {
        /*document.getElementById("mnuaboutus").classList.add('mnubrder');*/
        document.getElementById("mnucenters").className = "mnubrder";
    });   
    </script>
  
