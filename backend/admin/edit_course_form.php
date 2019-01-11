<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Course Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 3) {
      print "<p class='alert alert-success'>Course Name Updated Successfully</p>";
    }
    if ($msg == 4) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 5) {
      print "<p class='alert alert-danger'>Course Deleted Successfully</p>";
    }
    if ($msg == 6) {
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
          <h2>Edit Course<small></small></h2>
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
          if (isset($_GET['c_id'])) {
            $sql = "SELECT * FROM `course` WHERE `id`='$_GET[c_id]'";
            if ($res = $connection->query($sql)) {
              $course_row = $res->fetch_assoc();          
          ?>
          <form action="php/course/update_course.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
            <input type="hidden" name="c_id" value="<?php echo $course_row['id']; ?>">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teacher_name">Course Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="course_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $course_row['name']; ?>">
              </div>
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success" name="edit_course" value="edit_course">Save</button>
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
    
    <div class="clearfix"></div>
  </div>
</div>





<?php
require_once "include/footer.php";
?>

<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>