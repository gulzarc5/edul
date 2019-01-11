<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Teacher Added Successfully</p>";
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
                  	<h2>Edit Teacher <small></small></h2>
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
                      if (isset($_GET['t_id'])) {
                        $teacher_id = $_GET['t_id'];
                        $sql = "SELECT * FROM `teachers` WHERE `id`='$teacher_id'";
                        if ($res = $connection->query($sql)) {
                          $teacher_row = $res->fetch_assoc();

                    ?>
                    <form action="php/teacher/update_teacher.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                      <input type="hidden" name="tec_id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teacher_name">Teacher Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="teacher_name" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $teacher_row['name']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" id="last-name"  required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $teacher_row['email']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="mobile" class="form-control col-md-7 col-xs-12" type="text" required value="<?php echo $teacher_row['mobile']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <?php
                              if ($teacher_row['gender'] == 'male') {
                                print '<label class="btn btn-default active" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male" checked> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-default" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>';
                              }elseif ($teacher_row['gender'] == 'female') {
                                 print '<label class="btn btn-default" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male" checked> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-default active" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female" checked> Female
                            </label>';
                              }else{
                                print '<label class="btn btn-default" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male" checked> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>';
                              }
                            ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="b_day" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date" value="<?php echo $teacher_row['dob']; ?>">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="qualification" class="control-label col-md-3 col-sm-3 col-xs-12">Educational Qualification<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="qualification" ><?php echo $teacher_row['qualification']; ?></textarea>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">About Teacher<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="about" ><?php echo $teacher_row['about']; ?></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="control-label col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-9 col-sm-9 col-xs-12" >
                          <img src="../uploads/teacher_image/<?php echo $teacher_row['image']; ?>" height="200" width="200" id="imagePreview">
                        </div>
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">Image<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="select_image" required="required" class="form-control" name="image" onchange="readURL(this);">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                          <button type="submit" class="btn btn-success" name="edit_teacher" value="edit_teacher">Save</button>
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

<script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagePreview')
                        .attr('src', e.target.result)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
     }
</script>