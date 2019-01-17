<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "backend/database_connection/connection.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Eduread - Education HTML5 Template">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDULOUNGE </title> 
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    
   
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet"> <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <link href="css/assets/magnific-popup.css" rel="stylesheet"> 
    <link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 
	<link href="css/assets/owl.carousel.css" rel="stylesheet">
	<link href="css/assets/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/assets/meanmenu.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="t-profile-01 teachers-01 become_teachers home_version_03 contact courses">
	
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 header-top-left">
					<ul class="list-unstyled">

						<li><i class="fa fa-phone top-icon"></i> +91 94351 41741</li>
						<li><i class="fa fa-envelope top-icon"></i> info@edulounge.com</li>
					</ul>
				</div>
				<div class="col-sm-4 col-xs-12 header-top-right">
					<ul class="list-unstyled">
						<?php 
							if (!empty($_SESSION['user_id']) && !empty($_SESSION['email'])) {
								print '<li><a href="my-account.php"><i class="fa fa-user top-icon"></i>My Account</a></li>
								<li><a href="web_site_php/user_logout.php"><i class="fa fa-user-plus top-icon"></i>Logout</a></li>';
							}else{
								print '<li><a href="register.php"><i class="fa fa-user-plus top-icon"></i> Sign up</a></li>
									<li><a href="login.php"><i class="fa fa-lock top-icon"></i>Login</a></li>';
							}
						?>
					</ul>
				</div>
				<div class="col-sm-2 col-xs-12 header-top-right blink">
					<a href="#" class="navbar-brand  data-scroll "><img class="blink-image" src="images/blogo.png"style="width: 100px;"></a>
				</div>
			</div>
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
		<nav class="navbar navbar-inverse edu-navbar" style="background-color: white;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand  data-scroll"><img src="images/logo.png" alt="" style="width: 200px;"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="navbar-collapse-3">
          			<ul class="nav navbar-nav navbar-right  marg-head">
					<li ><a data-scroll="" href="index.php">HOME</a>
					</li>
					<li class="dropdown">
			            <a class="dropdown-toggle"  href="about-us.php">
			             ABOUT US
			            </a>
			            <ul class="dropdown-menu" role="menu">
			             <li><a href="faculty-team.php">Faculty Team</a></li>
                         <li><a href="our-testimonials.php">Our Testimonials</a></li>
			            </ul>
			          </li>

					<li><a data-scroll="" href="live-classes.php">LIVE CLASSES</a>
					</li>

					<li class="dropdown">
			            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			             e-LEARNING
			            </a>
			            <ul class="dropdown-menu" role="menu">
			             <li><a href="pen-drive-classes.php">PEN DRIVE CLASSES</a></li>
                         <li><a href="buy-books.php">BUY BOOKS</a></li>
			            </ul>
			          </li>

			          <li class="dropdown">
			            <a class="dropdown-toggle"  href="gallery.php">
			             GALLERY
			            </a>
			            <ul class="dropdown-menu" role="menu">
                                <li><a href="photos1.php">PHOTOS</a></li>
                                <li><a href="videos.php">VIDEOS</a></li>
			            </ul>
			          </li>
			          <li ><a data-scroll href="contact.php">CONTACT</a></li>
					 <li><a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
						<div id="search">
						  	<button type="button" class="close">×</button>
						 	 <form>
						   		 <input type="search" value="" placeholder="Search here...."  required/>
						   		 <button type="submit" class="btn btn_common blue">Search</button>
						 	 </form>
						</div>
					</li> 

					<li><a href="cart-page.php">
						<i class="fa fa-shopping-cart" style="font-size:40px;color:#F2703E;" alt="Shopping Cart" title="Shopping Cart"></i>
								</a>
								<div class="clearfix"> </div>
							</li>
				</ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
		<!--  End header section-->
<!--<div class="container" id="page_path">
		</div>-->
		<!-- /.container -->
	</div>
</header>
	<!--  End header section-->
