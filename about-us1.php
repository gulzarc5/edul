<?php
include('include/header.php');


	function getTeacherDetails($connection){

		$sql = "SELECT * FROM `teachers`";
		if ($res = $connection->query($sql)) {
			$cnt_tac_det=1;
			while ($teacherDet = $res->fetch_assoc()) {
				if ($cnt_tac_det == 1) {
						print '<div class="tab-pane active" id="tecdet'.$cnt_tac_det.'">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="backend/uploads/teacher_image/'.$teacherDet['image'].'" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> '.$teacherDet['mobile'].'</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
									<div class="all-courses">
										<h3>'.$teacherDet['name'].'</h3>
										<div class="profile__courses__inner">
											<ul class="profile__courses__list list-unstyled">
												<li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
												 <li><i class="fa fa-bookmark"></i>About :</li><br><br><br>
												
											</ul>
											<ul class="profile__courses__right list-unstyled">
												<li>'.$teacherDet['qualification'].'</li>
												<li>'.$teacherDet['about'].'</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>															
					</div>
                </div>';
				}else{
						print '<div class="tab-pane " id="tecdet'.$cnt_tac_det.'">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="backend/uploads/teacher_image/'.$teacherDet['image'].'" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> '.$teacherDet['mobile'].'</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
									<div class="all-courses">
										<h3>'.$teacherDet['name'].'</h3>
										<div class="profile__courses__inner">
											<ul class="profile__courses__list list-unstyled">
												<li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
												 <li><i class="fa fa-bookmark"></i>About :</li><br><br><br>
												
											</ul>
											<ul class="profile__courses__right list-unstyled">
												<li>'.$teacherDet['qualification'].'</li>
												<li>'.$teacherDet['about'].'</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>															
					</div>
                </div>';
				}
			
                $cnt_tac_det++;
			}
			# code...
		}

		

	}


	function getTeachers($connection){

		$sql = "SELECT * FROM `teachers`";
		if ($res = $connection->query($sql)) {
			$cnt_tac=1;
			while ($teacherDet = $res->fetch_assoc()) {
				print '<li class="">
                    <a class="fix12" href="#tecdet'.$cnt_tac.'" onclick="scrollss()" data-toggle="tab"  aria-expanded="false">
					<img class="img-responsive" src="backend/uploads/teacher_image/'.$teacherDet['image'].'" alt=" profile " style="height:250px;width:270px;">
					<p class="text-center" style="color: black;">'.$teacherDet['name'].'</p>
                    </a>
                </li>';
                $cnt_tac++;
			}
			# code...
		}

		

	}

?>
 


<div class="container tophead">
    <div class="row text-center">
		<h1 style="margin-top: 90px;">About Us</h1>
		<p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
		<span>About Us</span></p>
        
	</div>
</div>


<section class="become-teachers-01 " style="margin-top: -74px;">
	<div class="container">
				
		
		<div class="row">
			
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="contact-form text-center">
							<img src="images/teachars/12.png" alt="" class="img-responsive">
 														
						</div>
					</div>
					<div class="col-sm-7">
						<div class="tab-wapper">
							<ul class="nav nav-tabs">
							  	<li  class="active"><a href="#become_a_teacher"  data-toggle="tab"></i>About EDULOUNGE </a></li>
							  </ul>

							<div class="tab-content">
							  	<div class="tab-pane fade in active" id="become_a_teacher">
							  		<p>We at Edulounge are a team of dedicated professionals having a vivid experience in the field of Education. Our mission is to provide a launching pad for students where they not only gain high quality education, but an overall inclusive growth.</p>

							  		<p>Edulounge is an intersection of disciplines which provides a perfect enviornment where students get superb support and guidance apart from step wise learning . The unique blend of outstanding mentoring and meticulous study.</p>
							  		<p>Of our many strengths, there’s only one that really separates us from the crowd and that is we are standing right behind you 24 hours a day, 7 days a week.</p>
							  	</div>
							  </div>
  						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="service-container">
	<h2 class="title-section text-left text-center"><span>Special Features</span></h2>
              <hr>
    <div class="singleservice"> 

    <img class="serviceicon" src="images/fafa/6.png">
    <h2 class="servicetitle">
   Professional & Experienced faculties
    </h2>

    </div>
    <div class="singleserviceb">  
    <img class="serviceicon" src="images/fafa/5.png">
    <h2 class="servicetitle">
    Centrally located premises
    </h2>

    </div>
    <div class="singleservice">  
    <img class="serviceicon" src="images/fafa/4.png">
    <h2 class="servicetitle">
    State of art infrastructure
    </h2>  

    </div>
        <div class="singleserviceb">  
    <img class="serviceicon" src="images/fafa/3.png">
    <h2 class="servicetitle">
    Personal attention & counselling
    </h2>

    </div>
    <div class="singleservice">  
    <img class="serviceicon" src="images/fafa/2.png">
    <h2 class="servicetitle">
    Regular tests
    </h2>
    </div>
    <div class="singleserviceb">  
    <img class="serviceicon" src="images/fafa/1.png">
    <h2 class="servicetitle">
    Strategy setting & Motivational support
    </h2>  
    </div>
</div>


<!-- Teachers Area section -->
<section class="teacher-prolile-01 " id="scrolldiv">
	<h2 style="margin-bottom: 30px;" class="bg">Faculty Team</h2>  
	
	<div class="container">
    <div class="row">
        <div class="tabbable tabs-left">
			<div class="tab-content col-md-12">
				<?php
					 getTeacherDetails($connection); 
				?>
                <div class="tab-pane active" id="a">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="images/teachars/t-profile-01.jpg" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> 9435141741</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
									<div class="all-courses">
										<h3>CA ARUNITA JAIN</h3>
										<div class="profile__courses__inner">
											<ul class="profile__courses__list list-unstyled">
												<li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
												 <li><i class="fa fa-bookmark"></i>Subjects :</li><br><br><br>
												<li><i class="fa fa-star"></i>Achievements/Experience : </li>
											</ul>
											<ul class="profile__courses__right list-unstyled">
												<li>Chartered Accountant, Company Secretary, DISA(ICAI), B.Com(H)</li>
												<li><b>CA Intermediate</b> : Corporate &amp; Other Laws<br>
													<b>CA Intermediate</b> : Taxation<br>
													<b>CA IPC</b> : Laws, Ethics &amp; Communication<br>
													<b>CS </b> : All Lawa !!</li>
												<li><b>AIR 10</b> in CPT<br>
													<b>AIR 22</b> in CSS Foundation<br>
													<b>AIR 20</b> in CSS Execution<br>
													<b>2nd Position</b> Rajasthan University for B.Com(H)<br>
													<b>1st Position</b> in college for B.Com(H)<br>
													<b>Corporate Experience of 3+ years in Infosys</b> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>															
					</div>
                </div>
                <div class="tab-pane" id="b">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="images/teachars/t-profile-01.jpg" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> 9435141741</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
									<div class="all-courses">
							<h3>CA CHANDAN PATNI</h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    <li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
                                     <li><i class="fa fa-bookmark"></i>Subjects :</li><br><br><br><br>
                                    <li><i class="fa fa-star"></i>Achievements/Experience : </li>
                                </ul>
                                <ul class="profile__courses__right list-unstyled">
                                    <li>Chartered Accountant, Company Secretary, DISA(ICAI), CISA(ISACA, USA),  B.Com(H)</li>

                                    <li><b>CA Final</b> : ISCA<br>
                                    	<b>CA IPC</b> : ITSM<br>
                                    	<b>CA Intermediate</b> : EIS & SM<br>
                                    	<b>CA IPC/Intermediate</b> : Auditing & Assurance<br>
                                    	<b>CS Professional</b> : Information Technology & System Audit</li>
                                    <li>Faculty for<b>Advanced Information Technology Training Programme(ICAI)</b> <br>
                                   	Authored books on<b>Information Systems Control & Audit (ICAI) and informat<br> Technology & strategic Management (CA IPC)</b> published by <b> Taxmann Publicatons.</b>
                                    	</li>
                                </ul>
                            </div>
                        </div>
								</div>
							</div>
						</div>															
					</div>
                </div>
                <div class="tab-pane" id="c">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="images/teachars/teachar-10.jpg" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> 9435141741</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
									<div class="all-courses">
										<h3>CA LALIT KHANDELWAL</h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    <li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
                                     <li><i class="fa fa-bookmark"></i>Subjects :</li><br>
                                    <li><i class="fa fa-star"></i>Achievements/Experience : </li>
                                </ul>
											<ul class="profile__courses__right list-unstyled">
												<li>Chartered Accountant, Post Gradute Diploma in Finance Management, B.Com(H)</li>
												<li><b>CA Intermediate</b> : Accounts 1 & 2<br>
													<b>Economics Guru (Class Xlll)</b><br>
													</li>
												<li>Visiting Faculty at<b> Royal School of Business</b><br>
													Visiting Faculty at<b> Tata Institute of Social Science</b><br>
													Research Scholar at <b>Depatment of Business Administration - Guwahati University</b><br>
													 <b>7+ years</b>  of teaching experience<br>
													Taught <b>1000+ students</b><br>
													<b>Corporate Experience of 3 years in ITC</b> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>															
					</div>
                </div>
                <div class="tab-pane" id="d">
                    <div class="row">
						<div class="col-sm-3 t-profile-left">
							<div class="teacher-contact">
								<img src="images/teachars/teachar-09.jpg" alt="" class="img-responsive">
								<h3>contact info</h3>
								<p><span>Phone:</span> 9435141741</p>
							</div>
							<div class="teacher-contact">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter "></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-9 t-profile-right">
							<div class="row all-corsess-wapper">
								<div class="col-sm-12">
										<div class="all-courses">
							<h3>CA DHANENDAR DUGAR</h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    <li><i class="fa fa-graduation-cap"></i>Qualifications :</li>
                                     <li><i class="fa fa-bookmark"></i>Subjects :</li><br>
                                    <li><i class="fa fa-star"></i>Achievements/Experience : </li>
                                </ul>
                                <ul class="profile__courses__right list-unstyled">
                                    <li>Chartered Accountant, MBA (Finance), B.Com(H)</li>

                                    <li><b>CA Intermediate</b> : Costing & FM<br>
                                    	<b>CPT </b> : Maths
                                    	<b>CAT/CLAT</b> : Logical Reasoning Data Interpretation</li>
                                    	
                                    <li><b>State Rank 2</b> AHSEC <b> (12th)</b> <br>
                                   	 Faculty at <b> Time - Bangalore</b><br>
                                   	 Faculty at <b> Time - Guwahati</b><br>
                                   	Teaching Experience of <b>4+ years</b><br>
                                   	Corporate Experience of 2 years in <b> KPMG</b> 
                                    	</li>
                                </ul>
                            </div>
                        </div>
								</div>
							</div>
						</div>															
					</div>
                </div> -->
           
            </div>
			<div class="col-md-12">
			<hr>
			</div>
            <ul class="nav nav-tabs col-md-12" style="background-color: #0000ff96; ">
            
            	 <?php
					 getTeachers($connection); 
				?>
              <!--   <li class="">
                    <a href="#a" onclick="scrollss()" data-toggle="tab"  aria-expanded="false">
					<img src="images/teachars/teachar-01.jpg" alt=" profile " class="img-responsive" >
					<p class="text-center" style="color: black;">CA ARUNITA JAIN</p>
                    </a>
                </li>
                <li class="">
                    <a href="#a" onclick="scrollss()" data-toggle="tab" aria-expanded="false">
					<img src="images/teachars/teachar-01.jpg" alt=" profile " class="img-responsive">
					<p class="text-center" style="color: black;">CA ARUNITA JAIN</p>
                    </a>
                </li>
                <li class="">
                    <a href="#a" onclick="scrollss()" data-toggle="tab" aria-expanded="false">
					<img src="images/teachars/teachar-01.jpg" alt=" profile " class="img-responsive">
					<p class="text-center" style="color: black;">CA ARUNITA JAIN</p>
                    </a>
                </li>
                <li class="">
                    <a href="#b" onclick="scrollss()" data-toggle="tab" aria-expanded="false">
					<img src="images/teachars/teachar-01.jpg" alt=" profile " class="img-responsive">
					<p class="text-center" style="color: black">CA CHANDAN PATNI</p>
                    </a>
                </li>
                <li class="">
                    <a href="#c" onclick="scrollss()" data-toggle="tab" aria-expanded="false">
					<img src="images/teachars/teachar-10.jpg" class="img-responsive">
					<p class="text-center" style="color: black">CA LALIT KHANDELWAL</p>
                    </a>
                </li>
                <li class="">
                    <a href="#d" onclick="scrollss()" data-toggle="tab" aria-expanded="false">
					<img src="images/teachars/teachar-09.jpg" alt=" profile " class="img-responsive">
					<p class="text-center" style="color: black">CA DHANENDAR DUGAR</p>
                    </a>
                </li> -->
              
               
            </ul>
            
        </div>
    </div>
</div>
	
</section>


<!-- ./ End Students Say Area section -->
<section class="students-say-area" style="background-color: #8080800f;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>OUR Testimonials</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">								
					<div class="carousel-images slider-nav">
						<div>
							<img src="images/testimonial/1.png" alt="1" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/2.png" alt="2" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/5.png" alt="3" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/4.png" alt="4" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/3.png" alt="5" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/6.png" alt="6" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/7.png" alt="7" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/8.png" alt="8" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/testimonial/9.png" alt="9" class="img-responsive img-circle">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">
					<div class="single-box">
						<p>Sir, I had clear my group 2 exams in November and i am a chartered Now. I didnot communication my results back then please my sincere apology. I would like to thank you for not just teaching me ISCA infact the best thing i have learnt from you is how to carry yourself. Thank you sir for helping me secure 59 in ISCA. I will always have a fond memory of you going forward in life</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Sorabh Jain</span>
					</div>

					<div class="single-box">
						<p>Dear Sir, I want to thank you for helping me clear my CA inter group2. I got 62 marks in ITSM. I was not able to clear the group only because of this paper and in my NOV17 attempt. I got 32 in ITSM.
						You helped me a lot in clearing the group. Thank you once again Sir.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Neina Devi</span>
					</div>

					<div class="single-box">
						<p>Sir it was efforts in ISCA that made me score 72....Thank you so much sir...Your are the best faculty in ISCA.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Neha Dhariwal</span>
					</div>

					<div class="single-box">
						<p>Thank you so much Sir for your constant support and guidance....Loved the way you taught and encouraged in the class.... I was always weak in theary but the way you made us understand the concepts and also how the read theory subjects was just super amazing....Now my fear of theory subjects has gone down considerably....Thank you so much sir</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Deep</span>
					</div>

					<div class="single-box">
						<p>Thank You Sir...I got 74 marks...This is only because of your motivation...Thank You so much.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Sapna</span>
					</div>

					<div class="single-box">
						<p>Thank you so much bhaiya for your great teaching...it took long to clear but I never failed in ISCA... following your notes and teaching...secored 56 in ISCA...</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span></span>
					</div>
					<div class="single-box">
						<p>Thank you so much sir...I cleared second group with 62 in ISCA</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Nishant</span>
					</div>

					<div class="single-box">
						<p>1 mark short in ISCA for exemtion..Thank you sir for the support in ISCA</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span></span>
					</div>

					<div class="single-box">
						<p>I passed my group 2 with 62 in ISCA. All thank you to you, Today I am a chartered accountant, Thank you for all your support.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3></h3>
						<span>Hemant Sharma</span>
					</div>
				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Students Say Area section -->

<?php
include('include/footer.php');
?>


<script type="text/javascript">

	function scrollss(){
		// alert('hi');
		$('html,body').animate({
        scrollTop: $("#scrolldiv").offset().top},
        'slow');
	}
</script>

<!--<script type="text/javascript">
	$(document).ready(function(){
		var html='<div class="row">'+
				'<div class="col-md-12">'+
					'<div class="intro-text ">'+
						'<h1>About Us</h1>'+
						'<p><span><a href="index.php">Home /</a></span> <span>About Us</span></p>'+
					'</div>'+
				'</div>'+
			'</div>';

	$("#page_path").html(html);
	});
</script>-->
