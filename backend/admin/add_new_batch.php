<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Batch Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }




function getCenter($connection){
  $sql = "SELECT * FROM `center` ORDER BY `id` DESC";
  if ($res = $connection->query($sql)) {

    while($center = $res->fetch_assoc()){
      print '<option value="'.$center['id'].'">'.$center['name'].'</option> <tr>';
    }
  }
}

function getCourse($connection){
  $sql = "SELECT * FROM `course` ORDER BY `id` DESC";
  if ($res = $connection->query($sql)) {

    while($course = $res->fetch_assoc()){
      print '<option value="'.$course['id'].'">'.$course['name'].'</option> <tr>';
    }
  }
}


?>
<link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add New Batch<small></small></h2>
          <div class="clearfix"></div>
            <?php 
              if (isset($_GET['msg'])) {
                showMessage($_GET['msg']);
              }           
            ?>
        </div>

        <div class="x_content">
          <br />
          <form action="php/course/add_batch.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="center_id">Select Center <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-7 col-xs-12" name="center_id">
                  <option value="">Please Select Center</option> 
                  <?php getCenter($connection); ?>               
                </select>
              </div>              
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="course_id">Course Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-7 col-xs-12" name="course_id">
                  <option>Please Select Course</option> 
                    <?php getCourse($connection); ?>
                               
                </select>
              </div>              
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="batch_start_date">Batch Start Date<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" name="batch_start_date"  required="required" class="form-control col-md-7 col-xs-12">
              </div>              
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="batch_end_date">Batch End Date<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" name="batch_end_date"  required="required" class="form-control col-md-7 col-xs-12">
              </div>              
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="start_time">Batch Start Time<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-group date" id="myDatepicker3">
                  <input type="text" name="start_time" class="form-control">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_time">Batch End Time<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-group date" id="myDatepicker4">
                  <input type="text" name="end_time" class="form-control">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fees">Fees<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input cast="any" type="number" name="fees"  required="required" class="form-control col-md-7 col-xs-12">
              </div>              
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success" name="add_batch" value="add_batch">Submit</button>
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
<script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#myDatepicker').datetimepicker();
    

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    $('#myDatepicker4').datetimepicker({
        format: 'hh:mm A'
    });
    
   
</script>