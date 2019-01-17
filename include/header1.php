<?php
session_start();
include_once "backend/database_connection/connection.php";
?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 May 2018 20:24:06 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Eduread - Education HTML5 Template">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDULOUNGE </title> 
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
	<!-- Popup -->
	<link href="css/assets/magnific-popup.css" rel="stylesheet"> 
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="css/assets/revolution/layers.css">
	<link rel="stylesheet" href="css/assets/revolution/navigation.css">
	<link rel="stylesheet" href="css/assets/revolution/settings.css">	
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<!-- Slick Slider -->
	<link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 	
	<!-- Mean Menu-->
	<link rel="stylesheet" href="css/assets/meanmenu.css">   
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="home_version_03">
	<div id="enquirypopup" class="modal fade in" role="dialog">
        <div class="modal-dialog">
        	<!-- Modal content-->
            <div class="modal-content" style="margin-top: 70px;">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body section-white">
                	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                		<!-- Indicators -->
				      <ol class="carousel-indicators">
				      	<?php
				      	$sql_popup = "SELECT * FROM `gallery` WHERE `type`='3'";
				      	if ($res_popup = $connection->query($sql_popup)) {
				      		$count = 0;
				      		while($row_popup = $res_popup->fetch_assoc()){
				      			if ($count == 0) {
				      				print '<li data-target="#carousel-example-generic" data-slide-to="'.$count.'" class="active"></li>';
				      			}else{
				      				print '<li data-target="#carousel-example-generic" data-slide-to="'.$count.'" ></li>';
				      			}
				      			
				      			$count++;
				      		}
				      		
				      	}
				      	?>
				        <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				        <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
				      </ol>

				      <!-- Wrapper for slides -->
				      <div class="carousel-inner">   
				       
				        
				      	<?php
				      	$sql_popup = "SELECT * FROM `gallery` WHERE `type`='3'";
				      	if ($res_popup = $connection->query($sql_popup)) {
				      		$count = 0;
				      		while($row_popup = $res_popup->fetch_assoc()){
				      			if ($count == 0) {
				      				print ' <div class="item active">
							          <img src="backend/uploads/gallery_image/'.$row_popup['source'].'" alt="...">
							          <div class="carousel-caption">
							          
							          </div>
							        </div>';
				      			}else{
				      				print ' <div class="item">
							           <img src="backend/uploads/gallery_image/'.$row_popup['source'].'" alt="...">
							          <div class="carousel-caption">
							          
							          </div>
							        </div>';
				      			}
				      			$count++;
				      		}
				      		
				      	}
				      	?>
				      </div>

				      <!-- Controls -->
				      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left"></span>
				      </a>
				      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right"></span>
				      </a>
				    </div>
                </div>
                
            </div>
            
        </div>
    </div>
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
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
	<nav class="navbar navbar-inverse edu-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand  data-scroll"><img src="images/logo.png" alt="" style="width: 200px;"></a>
        </div>
    
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
		
		<!-- /.container -->
	</div>
 	<!--==================
		Slider
	===================-->
	
	<div class="container-fluid">
	<div class="row">
		<iframe src="https://www.youtube.com/embed/2MpUj-Aua48?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=0&controls=0&autoplay=1"  width="100%" height="400"  frameborder="0" allowfullscreen></iframe>
	</div>
	</div>

	<!--<div class="rev_slider_wrapper">
       <div id="rev_slider_1" class="rev_slider" style="display:none">

            <ul>
				<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/index/slider-01.jpg">
                	<div class="slider-overlay"></div>
					<img src="images/index/slider-01.jpg" alt="Sky" class="rev-slidebg">
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:50px; color:#fff; text-transform:uppercase; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700; margin-top: 180px;">better education for
					</div>
					
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:50px; color:#fff; text-transform:uppercase; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700; margin-top: 170px;"" >a better world
					</div>
					
										
					
					<div class="tp-caption lfb tp-resizeme header-btn" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="90" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"><!-- <a href="#." class="el-btn-regular slider-btn-left">Get Started Now</a> <a href="#." class="el-btn-regular">View Courses</a>
					</div>
				</li>
                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/index/slider-02.jpg">
                	<div class="slider-overlay"></div>
					<img src="images/index/slider-02.jpg" alt="Sky" class="rev-slidebg">
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:50px; color:#fff; text-transform:uppercase; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;margin-top: 180px;">Education is a 
					</div>
					
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:50px; color:#fff; text-transform:uppercase; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;margin-top: 170px;">Global Community
					</div>
					
					
					
					<div class="tp-caption lfb tp-resizeme header-btn" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="90" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;">
					</div>
				</li>
            </ul>

        </div>
    </div>-->
					</div>


    <!-- END SLIDER CONTAINER WRAPPER -->
</header>