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
												 <li><i class="fa fa-bookmark"></i>Subjects :</li>
												 <li><i class="fa fa-bookmark"></i>>Achievements/Experience : :</li><br><br><br>
												
											</ul>
											<ul class="profile__courses__right list-unstyled">
												<li>'.$teacherDet['qualification'].'</li>
												<li>'.$teacherDet['subjects'].'</li>
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
												 <li><i class="fa fa-bookmark"></i>Subjects :</li>
												 <li><i class="fa fa-bookmark"></i>>Achievements/Experience : :</li><br><br><br>
												
											</ul>
											<ul class="profile__courses__right list-unstyled">
												<li><b>'.$teacherDet['qualification'].'</b></li>
												<li>'.$teacherDet['subjects'].'</li>
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
				print '
				 <li class="">
                    <a href="#tecdet'.$cnt_tac.'" onclick="scrollss()" data-toggle="tab"  aria-expanded="false">
					<img  src="backend/uploads/teacher_image/'.$teacherDet['image'].'" alt=" profile " class="img-responsive faculty-heights" >
					<p class="text-center" style="color: black;">'.$teacherDet['name'].'</p>
                    </a>
                </li>

				';
                $cnt_tac++;
			}
			# code...
		}

		

	}
?>

<div class="container tophead">
    <div class="row text-center">
    <h1 style="">Faculty Team</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Faculty Team</span></p>
        
  </div>
</div>

<section class="teacher-prolile-01 " id="scrolldiv" style="padding: 24px 0;">
	<!-- <div class="container" style="width: 90%">
	<h2 style="margin-bottom: 30px; border-radius: 10px 10px 0px 0px" class="bg">Faculty Team</h2>  
</div> -->
	
	<div class="container">
    <div class="row">
        <div class="tabbable tabs-left">
		
            <ul class="nav nav-tabs col-md-5" style="background-color: #0000ff96;border-radius: 20px;padding-left: 23px;">
            	<?php getTeachers($connection); ?>
               
              
               
            </ul>
			
			<div class="tab-content col-md-7" style="padding-right: 0px;">
				<?php getTeacherDetails($connection); ?>
			
           
            </div>
			
            
        </div>
    </div>
</div>
	
</section>
 



<?php
include('include/footer.php');
?>
