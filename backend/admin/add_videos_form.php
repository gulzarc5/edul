<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Image Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }
?>
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  	<h2>Add New Teacher <small></small></h2>
                    <div class="clearfix"></div>
                      <?php 
                        if (isset($_GET['msg'])) {
                          showMessage($_GET['msg']);
                        }           
                      ?>
                </div>

                <div class="x_content">
                    <br />
                    <form action="php/web_image_video/add_video.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">Video<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="video" required="required" class="form-control" name="video" placeholder="Paste Youtube Video Link"  onchange="displayIt();">
                        </div>

                      </div>
                      <div class="form-group">
                      <center><div class="col-md-12 col-sm-12 col-xs-12" id="preview">
                        
                      </div></center>
                      </div>
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                          <button type="submit" class="btn btn-success" name="add_video" value="add_video">Submit</button>
                        </div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once "include/footer.php";
?>

<script type="text/javascript">
  function  displayIt() {
    // alert('hi');
      var url =$('#video').val();
        $('<iframe src="'+ url +'" frameborder="0" scrolling="no"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>').appendTo($('#preview'));   
      }
</script>