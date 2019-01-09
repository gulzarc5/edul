<?php
include('include/header.php');
?>

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Live Classes</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Live Classes</span></p>
        
  </div>
</div>

<section class="login-area" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="#" class="eduread-register-form text-center">
					<p class="lead">Welcome Back</p>					
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="Username *" name="name" type="text">
					</div>
					<div class="form-group">
					  	<input class="required form-control" placeholder="Password *" name="password" type="password">
					</div>		
					<div class="form-group register-btn">
					 	<submit class="btn btn-primary btn-lg">Login</submit>
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
  
