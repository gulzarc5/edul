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
 


<div class="container-fluid bg-no-overlay">
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
