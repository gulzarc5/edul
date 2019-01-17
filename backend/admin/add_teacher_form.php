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
                    <form action="php/teacher/add_teacher.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teacher_name">Teacher Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="teacher_name" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" id="last-name"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="mobile" class="form-control col-md-7 col-xs-12" type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-success" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="b_day" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="qualification" class="control-label col-md-3 col-sm-3 col-xs-12">Educational Qualification<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="qualification" ></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="qualification" class="control-label col-md-3 col-sm-3 col-xs-12">Subjects (put subjects seperated by comma)<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  required="required" class="form-control" name="subject" ></textarea>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">Achievement / Experiance<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="about" ></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="about" class="control-label col-md-3 col-sm-3 col-xs-12">Image<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="message" required="required" class="form-control" name="image" >
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                          <button type="submit" class="btn btn-success" name="add_teaher" value="add_teaher">Submit</button>
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