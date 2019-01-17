<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Password Changed Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 3) {
      print "<p class='alert alert-danger'>Password Not Matched</p>";
    }
    
  }

?>
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Change Password<small></small></h2>
          <div class="clearfix"></div>
            <?php 
              if (isset($_GET['msg'])) {
                showMessage($_GET['msg']);
              }           
            ?>
        </div>

        <div class="x_content">
          <br />
          <form action="php/password/change_password.php" method="post"  class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_pass">Current Password<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="current_pass" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new_pass">New Password<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="new_pass" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success" name="change_pass" value="change_pass">Submit</button>
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

