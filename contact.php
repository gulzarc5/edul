<?php
include('include/header.php');
?>

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Contact Us</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Contact Us</span></p>
        
  </div>
</div>


<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 contact-info">
				<div class="col-sm-12 contact-title">
					<h2 >Contact Info</h2>		
					<p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p>+91 94351 41741</p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p>info@edulounge.com</p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4>
                                <p>EduLounge
                                   2nd floor, Opus Pinnacle,
	                               Opposite Sonaram Field,
	                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Above Ti Ford Showroom,
	                               Bharalumukh,
	                               Guwahati
	                           </p>
                            </div>
	                    </div> 
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>	 
	                	</div> 
                    </div>
                </div>                          	                        
			</div>	

			<div class="col-sm-6  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Send A Message</h2>		
						<p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
					</div>
				</div>
				<div class="input-contact-form">
					
					
					<div id="contact">
					<div id="message"></div>	                       
                    <form method="post" action="http://ecologytheme.com/theme/eduread/contact.php" name="contactform" id="contactform">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                                </div>
                            </div>	
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Message" name="comments" id="comments"></textarea>
                                </div>
                            </div>	
                            <div class="col-sm-12">                                    
                                <div class="full-width">
                                    <input value="Submit" type="submit" name="submit" id="submit">
                                </div>
                            </div>	
                        </div>
                    </form>
                    </div>
                    
                    
				</div>
			</div>																
		</div>
	</div>
</section>
<!-- ./ End Contact Area section -->

<?php
include('include/footer.php');
?>
