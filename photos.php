<?php
include('include/header.php');
?>

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Photos</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Photos</span></p>
        
  </div>
</div>


<section class="courses-area-04" id="courses" style="padding-top: 70px;">
<div class="container">	

	<div class="row">
		<div class="courses-wrapper owl-carousel" id="courses-carousel-04">	
		<?php
			$sql = "SELECT * FROM `gallery` WHERE `type`='1' ORDER BY `id` DESC";
			if ($res = $connection->query($sql)) {
			    $sl_count_img = 1;
			    $row_count_image = $res->num_rows;
			    $start_div_main_flag = true;
			    $start_div_sub = true;
			    while($image = $res->fetch_assoc()){
			    	if ($start_div_main_flag == true) {
			    		print '<div class="col-sm-12">';
			    		$start_div_main_flag = false;
			    	}
			    	if ($start_div_sub == true) {
			    		print '<div class="col-sm-12">';
			    		$start_div_sub = false;
			    	}

			    	print '<div class="col-sm-4">
					    <div class="single-courses">
							<figure>
								<div class="figure-img"><img src="backend/uploads/gallery_image/'.$image['source'].'" alt="" class="img-responsive"></div>
							</figure>
						</div><!-- Ends: .single courses -->
					</div>';

			    	if ($sl_count_img % 3 == 0) {
			    		print '</div>';
			    		$start_div_sub = true;
			    	}
			    	if ($sl_count_img % 6 == 0) {
			    		print '</div>';
			    		$start_div_main_flag = true;
			    	}
			    	$sl_count_img++;
			    }
			}
		?>	
			
		</div>
	</div><!--End .row-->

</div>
</section><!-- Ends: . -->	
<!-- ./ End Courses Area section -->




<?php
include('include/footer.php');
?>
