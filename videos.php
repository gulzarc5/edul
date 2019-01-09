<?php
include('include/header.php');
?>

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Videos</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Videos</span></p>
        
  </div>
</div>
<!--Start Courses Area Section-->
<section class="courses-03" style="margin-top: 50px;">
	<div class="container">	
		<?php
			$sql = "SELECT * FROM `gallery` WHERE `type`='2' ORDER BY `id` DESC";
			if ($res = $connection->query($sql)) {
			    $sl_count_img = 1;
			    $start_div_main_flag = true;
			    while($video = $res->fetch_assoc()){
			    	if ($start_div_main_flag == true) {
			    		print '<div class="row courses-r-margin-bottom">';
			    		$start_div_main_flag = false;
			    	}
			    	print '<div class="col-sm-4 single-courses-box">
				 <div class="single-courses">
					<div class="courses-img">
						<iframe width="360" height="245" src="'.$video['source'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>';

			    	if ($sl_count_img % 3 == 0) {
			    		print '</div>';
			    		$start_div_sub = true;
			    	}
			    	$sl_count_img++;
			    }
			}
		?>	
	</div>
</section><!-- Ends: . -->	
<!-- ./ End Courses Area section -->




<?php
include('include/footer.php');
?>
