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
                  	<h2>Add Popup Image <small></small></h2>
                    <div class="clearfix"></div>
                      <?php 
                        if (isset($_GET['msg'])) {
                          showMessage($_GET['msg']);
                        }           
                      ?>
                </div>

                <div class="x_content">
                    <br />
                    <form action="php/web_image_video/add_image.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">Image<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img id="preview" src="../../images/admin.png" alt="your image" height="200" />
                          <input type="file"  required="required" class="form-control" name="image" onchange="readURL(this);">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                          <button type="submit" class="btn btn-success" name="add_image" value="add_image">Submit</button>
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
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
     }
</script>