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


function showState($connection,$state_id){
  $sql = "SELECT * FROM `state`";
  if ($res = $connection->query($sql)) {
      while($state = $res->fetch_assoc()){
        if ($state['id'] == $state_id) {
          print '<option value="'.$state['id'].'" selected>'.$state['name'].'</option>';
        }else{
          print '<option value="'.$state['id'].'">'.$state['name'].'</option>';
        }
        
      }
      
  }
}

function showCity($connection,$state_id,$city_id=null){
  $sql = "SELECT * FROM `city` WHERE `state_id`='$state_id'";
  if ($res = $connection->query($sql)) {
      while($city = $res->fetch_assoc())
      if ($city['city_id'] == $city_id) {
         print '<option value="'.$city['city_id'].'" selected>'.$city['name'].'</option>';
      }else{
       print '<option value="'.$city['city_id'].'">'.$city['name'].'</option>';
      }
  }
}
?>
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  	<h2>Edit Student Registration <small></small></h2>
                    <div class="clearfix"></div>
                     <?php 
                      if (isset($_GET['msg'])) {
                        showMessage($_GET['msg']);
                      }           
                    ?>
                </div>
                <div class="x_content">
                    <br />
                    <?php
                    if (!empty($_GET['reg_id'])) {
                      $sql_center = "SELECT `student_batch_registration`.`id` as main_id,`student_batch_registration`.`is_paid` as is_paid, `student_batch_registration`.`comments` as comments, `batch`.`name` as batch_name, `batch`.`start_date` as batch_start_date, `batch`.`end_date` as batch_end_date, `batch`.`start_time` as batch_start_time, `batch`.`end_time` as batch_end_time, `batch`.`fees` AS batch_fees, `student_batch_registration`.`reg_date` as reg_date, `course`.`name` as course_name, `center`.`address` as center_address, `state`.`name` as center_state, `city`.`name` as center_city, `center`.`pin` as center_pin, `center`.`email` as center_email, `center`.`phone_no` as center_phone, `center`.`name` as center_name,`users`.`f_name` as sutdent_f_name, `users`.`l_name` as sutdent_lname, `users`.`id` as sutdent_id FROM `student_batch_registration` INNER JOIN `batch` on `batch`.`id` = `student_batch_registration`.`batch_id` INNER JOIN `course` ON  `course`.`id`=`student_batch_registration`.`course_id` INNER JOIN `center` ON `center`.`id`=`student_batch_registration`.`center_id` INNER JOIN `state` ON `state`.`id`=`center`.`state_id` INNER JOIN `city` ON `city`.`city_id` =`center`.`city_id` INNER JOIN `users` on `users`.`id` = `student_batch_registration`.`student_id` WHERE  `student_batch_registration`.`id`='$_GET[reg_id]'";
                      if ($res_center = $connection->query($sql_center)) {
                         $row_center = $res_center->fetch_assoc();

                    
                    ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="php/Student_Registration/student_registration_update.php" method="post">
                      <input type="hidden" name="reg_id" value="<?php echo $_GET['reg_id']; ?>">
                       <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="center_name">Student Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="student_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_center['sutdent_f_name'].' '.$row_center['sutdent_lname']; ?>" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="center_name">Comments<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12" name="comments"><?php echo $row_center['comments']; ?></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="center_name">Fees<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fees" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_center['batch_fees']; ?>" disabled>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="status" class="form-control col-md-7 col-xs-12" name="status" required>
                            <option value="">Please Select City</option> 
                            <?php
                              if ($row_center['is_paid'] == '1') {
                                print '<option value="1" Selected>Paid</option> 
                                <option value="0">Pending</option> ';
                              }else{
                                print '<option value="1" Selected>Paid</option> 
                                <option value="0" selected>Pending</option> ';
                              }
                            ?>
                                      
                          </select>
                        </div>  
                      </div>
                    </div>
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button> -->
                          <button type="submit" class="btn btn-success" name="edit_std_reg" value="edit_std_reg">Save</button>
                        </div>
                      </div>

                    </form>
                    <?php

                      }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once "include/footer.php";
?>

<!-- <script>
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

</script> -->