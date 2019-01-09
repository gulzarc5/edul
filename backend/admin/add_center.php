<?php
require_once "include/header.php";

function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Center Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }


function showState($connection){
  $sql = "SELECT * FROM `state`";
  if ($res = $connection->query($sql)) {
      while($state = $res->fetch_assoc()){
        print '<option value="'.$state['id'].'">'.$state['name'].'</option>';
      }
      
  }
}

function showCity($connection){
  $sql = "SELECT * FROM `city`";
  if ($res = $connection->query($sql)) {
      $city = $res->fetch_assoc();
       print '<option value="'.$city['city_id'].'">'.$city['name'].'</option>';
  }
}
?>
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  	<h2>Add New Center <small></small></h2>
                    <div class="clearfix"></div>
                     <?php 
                      if (isset($_GET['msg'])) {
                        showMessage($_GET['msg']);
                      }           
                    ?>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="php/center/add_center_data.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="center_name">Center Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="center_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="state" class="form-control col-md-7 col-xs-12" name="state" required>
                            <option value="">Please Select State</option> 
                            <?php showState($connection); ?>              
                          </select>
                        </div>  
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="city_list" class="form-control col-md-7 col-xs-12" name="city" required>
                            <option value="">Please Select City</option> 
                                      
                          </select>
                        </div>  
                      </div>

                      <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label><span class="required">*</span>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-6 col-sm-6 col-xs-12" rows="3" placeholder="Enter Address" name="address" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pin<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="pin" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="email" class="form-control col-md-7 col-xs-12" required="required" type="email">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="phone_no" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button> -->
                          <button type="submit" class="btn btn-success" name="add_center" value="add_center">Submit</button>
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

<script>
    // AJAX call for autocomplete 
$(document).ready(function(){
    $("#state").change(function(){
        // alert($(this).val());
        $.ajax({
        type: "POST",
        url: "ajaxphp/city_fetch.php",
        data:'state='+$(this).val(),
        success: function(data){
            // console.log(data);
            // $("#suggesstion-box").show();
            $("#city_list").html(data);
            // $("#trnto").css("background","#FFF");
        }
        });
    });
});

</script>