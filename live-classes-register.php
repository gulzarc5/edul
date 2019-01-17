<?php
include('include/header.php');


function getBatchDetails($connection,$batch){
  $sql = "SELECT * FROM `batch` WHERE `id`='$batch'";
  if ($res = $connection->query($sql)) {
    $row_batch = $res->fetch_assoc();
    print '<td style="width:270px;">'.$row_batch['name'].'</td>
            <td style="width:130px;">'.$row_batch['start_date'].'</td>
            <td style="width:200px;">'.$row_batch['end_date'].'</td>
            <td style="width:200px;">'.$row_batch['start_time'].'-'.$row_batch['end_time'].'</td>
          <td style="width:200px;">'.$row_batch['fees'].'</td>';
  }
}


function showState($connection){
  $sql = "SELECT * FROM `state`";
  if ($res = $connection->query($sql)) {
      while($states = $res->fetch_assoc()){
          print '<option value="'.$states['id'].'">'.$states['name'].'</option>';
      }      
  }
}

function showcity($connection,$state,$city = null){
  $sql = "SELECT * FROM `city` WHERE `state_id`='$state'";
  if ($res = $connection->query($sql)) {
      while($city_row = $res->fetch_assoc()){
        print '<option  value="'.$city_row['city_id'].'">'.$city_row['name'].'</option>';
      }
    }
  }
?>
<div class="container tophead">
    <div class="row text-center">
    <h1 style="">Live Classes</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Live Classes</span></p>
        
  </div>
</div>

<div class="container" style="margin-top: 30px;">
  <div class="panel panel-default">
    <div class="panel-heading"><h5>Complete Online Admission Form In Quick 4 Steps!!!</h5></div>
      <div class="panel-body">
        <div class="row text-center"> 
          <div class="col-md-12">
            <h5 class="title-content">STEP 4 : Admission Form</h5>
            <h5 class="title-content">Batch Details </h5>
          </div>
        </div>
        <div class="panel-body text-center">
          <div class="row tblscroll">
              <div class="table-responsive tblpd"> 
                <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:13px;" cellspacing="0" cellpadding="3">
                  <tbody>
                    <tr class="headerStyle" align="center">
                      <th scope="col">Batch Name</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">End Date</th>
                      <th scope="col">Timing</th>
                      <th scope="col">Total Fees (In Rs.)</th>
                    </tr>
                    <tr>
                      <?php
                        if (!empty($_SESSION['batch'])) {
                            getBatchDetails($connection,$_SESSION['batch']);
                        }
                      ?>    
                    </tr>
                  </tbody>
                </table>
              </div>    
          </div>
         <?php
          if (!empty($_SESSION['user_id'])) {
             $sql_user_data = "SELECT * FROM `users` WHERE `id`='$_SESSION[user_id]'";
             if ($res_user_data = $connection->query($sql_user_data)) {
                 $user_info = $res_user_data->fetch_assoc();
              } 
          }
         ?>
          <form class="form-horizontal" action="web_site_php/course_registration.php" method="post">
            <table class="table table-striped" style="margin-top: 20px;">
              <tbody>
                <tr>
                  <td>
                   
                      <table  style="margin-bottom: 139px;" >
                        <tr>
                          <td>
                      <?php
                      if (!empty($user_info['f_name'])) {
                      ?>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Full Name:*</label>
                        <div class="col-md-8">
                          <input name="student_name" placeholder="Enter Full Name" class="form-control" value="<?php echo $user_info['f_name'].' '.$user_info['l_name']; ?>" required="true"  type="text" disabled>
                        </div>
                      </div>
                      <?php
                      }else{
                      ?>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Full Name:*</label>
                        <div class="col-md-8">
                          <input name="student_name" placeholder="Enter Full Name" class="form-control" required="true"  type="text" >
                        </div>
                      </div>
                      <?php
                    }
                      ?>
                      </td>
                    </tr>
                        
                      <tr>
                      <td>  
                      <?php
                      if (!empty($user_info['mobile'])) {
                      
                      print '<div class="form-group">
                        <label class="col-md-4 control-label">Mobile:*</label>
                        <div class="col-md-8">
                          <input  name="mobile" placeholder="Enter Mobile Number" class="form-control" required="true" value="'.$user_info['mobile'].'" type="text" disabled>
                        </div>
                      </div>';
                    }else{
                      print '<div class="form-group">
                        <label class="col-md-4 control-label">Mobile:*</label>
                        <div class="col-md-8">
                          <input  name="mobile" placeholder="Enter Mobile Number" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>';
                    }
                     ?> 
                    </td>
                  </tr>
                  <tr>
                    <td width="70%">
                      <div class="form-group">
                        <label class="col-md-4 control-label">Selected City:*</label>
                        <div class="col-md-8">
                          <?php
                            if(!empty($_SESSION['batch'])){
                              $sql_city_name = "SELECT `city`.`name` as city_name FROM `batch` INNER JOIN `center` ON `center`.`id` = `batch`.`center_id` INNER JOIN `city` ON `city`.`city_id` = `center`.`city_id` WHERE `batch`.`id` = '$_SESSION[batch]'";
                              if($res_city_name = $connection->query($sql_city_name)) {
                                $row_city_name = $res_city_name->fetch_assoc();
                                print '<input id="phoneNumber" name="phoneNumber" placeholder="Selected City" class="form-control" required="true" value="'.$row_city_name['city_name'].'" type="text" disabled>';
                              }
                            }
                          ?>
                        </div>
                      </div>
                         
                      <?php
                        if(!empty($_SESSION['batch'])){
                          print '<input type="hidden" name="batch_id_reg" value="'.$_SESSION['batch'].'">';
                          $sql = "SELECT * FROM `batch` WHERE `id`='$_SESSION[batch]'";
                          if ($res = $connection->query($sql)) {
                            $row_batch = $res->fetch_assoc();
                          }
                        }
                      ?>
                    </td>
                  </tr>
                      
                      <tr>
                        <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Fee:*</label>
                        <div class="col-md-8">
                          <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="<?php 
                          if(!empty($row_batch['fees'])){
                            echo $row_batch['fees']; 
                          }
                          ?>" type="text" disabled>
                        </div>
                      </div>
                    </td>
                  </tr>
                    <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Address Line 1: </label>
                        <div class="col-md-8">
                          <?php
                          if (!empty($user_info['address'])) {
                            print '<textarea class="form-control" placeholder="Enter Address 1" rows="5" name="address1">'.$user_info['address'].'</textarea>';
                          }else{
                            print '<textarea class="form-control" placeholder="Enter Address 1" rows="5" name="address1"></textarea>';
                          }
                          ?>
                          
                        </div>
                      </div>
                    </td>
                  </tr>
                    
                    <tr>
                    <td> 
                      <div class="form-group">
                        <label class="col-md-4 control-label">State:*</label>
                        <div class="col-md-8">
                          <select class="form-control" id="state_sarch" name="state" required="true">
                            <option value="" selected>Please Select State</option>
                            <?php showState($connection) ?>
                          </select>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Pincode:*</label>
                        <div class="col-md-8">
                          <input  name="pin" placeholder="Enter Pin Code" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>  
                      <div class="form-group">
                        <label class="col-md-4 control-label">I Accept terms & Condition:*</label>
                        <div class="col-md-8">
                          <label style="margin-left: -214px;"><input type="checkbox" name="terms" value="1">Privacy Policy</label>
                        </div>

                      </div>
                       <?php
                          if (isset($_GET['msg'])) {
                            if ($_GET['msg'] == 3) {
                              print '<b class="alert alert-danger">Please Accept Terma & Conditions</b>';
                            }
                          }
                          ?>
                        </td>
                      </tr>
                          </table>
                   
                  </td>
                  <td>
                    <table style="margin-bottom: 152px;">

                      <?php
                      if (empty($_SESSION['user_id'])) {
                      ?>
                     <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Password:*</label>
                        <div class="col-md-8">
                          <input  name="password" placeholder="Enter Password" class="form-control" required="true" value="" type="password">
                        </div>
                      </div>
                      </td>
                   </tr>
                      <?php
                       }
                       ?>
                     
                   <tr>
                     <?php
                      if (!empty($user_info['email'])) {
                      ?>
                    <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Email:*</label>
                        <div class="col-md-8">
                          <input  name="email" id="email_check" placeholder="Enter Email" class="form-control" required="true" value="<?php echo $user_info['email'];?>" type="text" disabled>
                        </div>
                        
                      </div>
                      <div id="emailmsg"></div>
                    </td>
                    <?php
                       }else{
                       ?>
                       <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Email:*</label>
                        <div class="col-md-8">
                          <input  name="email" placeholder="Enter Email" class="form-control" required="true" id="email_check"  type="text">
                        </div>
                        
                      </div>
                      <div  class="col-md-4"></div>
                      <div id="emailmsg" class="col-md-8"></div>
                    </td>
                  </tr>
                   <?php
                       }
                       ?>
                    <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Selected Course:*</label>
                        <div class="col-md-8">
                          <?php
                            if(!empty($_SESSION['batch'])){
                              $sql_course_name = "SELECT `course`.`name` as course_name FROM `batch` INNER JOIN `course` ON `course`.`id` = `batch`.`course_id`  WHERE `batch`.`id` = '$_SESSION[batch]'";
                              if($res_course_name = $connection->query($sql_course_name)) {
                                $row_course_name = $res_course_name->fetch_assoc();
                                print ' <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="'.$row_course_name['course_name'].'" type="text" disabled>';
                              }
                            }
                          ?>                              
                        </div>
                      </div>
                    </td>
                  </tr>

                    <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Selected Center:*</label>
                        <div class="col-md-8">
                          <?php
                            if(!empty($_SESSION['batch'])){
                              $sql_center_name = "SELECT `center`.`name` as center_name FROM `batch` INNER JOIN `center` ON `center`.`id` = `batch`.`center_id`  WHERE `batch`.`id` = '$_SESSION[batch]'";
                              if($res_center_name = $connection->query($sql_center_name)) {
                                $row_center_name = $res_center_name->fetch_assoc();
                                print ' <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="'.$row_center_name['center_name'].'" type="text" disabled>';
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </td>
                  </tr>


                  <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Registration Type:*</label>
                       <div class="col-md-8">
                          <select class="form-control" id="" name="registration_type" required>
                            <option value='' selected>Please Select Type</option>
                            <option value='CA'> CA</option>
                            <option value="CS">CS</option>
                            <option value="School/College">School/College</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Registration No:*</label>
                        <div class="col-md-8">
                          <input  name="registration_no" placeholder="Registration No/Name" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </td>
                  </tr> 

                   <!-- <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">ICAI Registration No:*</label>
                        <div class="col-md-8">
                          <input  name="icai_no" placeholder="Enter ICAI Registration No" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                    </td>
                  </tr> -->
                       
                    <tr>
                      <td>  
                      <div class="form-group">
                        <label class="col-md-4 control-label">Address Line2: </label>
                        <div class="col-md-8">
                          <textarea class="form-control" rows="5" name="address2"></textarea>
                        </div>
                      </div>
                    </td>
                  </tr>
                         
                    <tr>
                      <td>
                      <div class="form-group">
                        <label class="col-md-4 control-label">City*</label>
                        <div class="col-md-8">
                          <select class="form-control" id="city_reg" name="city" required="true">
                            <option value="" selected>Please Select City</option>
                          </select>
                          </div>
                      </div>
                    </td>
                  </tr>


                     <tr>
                      <td width="40%">
                      <div class="form-group">
                        <label class="col-md-4 control-label">Total Pay:*</label>
                        <div class="col-md-8">
                          <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="<?php 
                          if(!empty($row_batch['fees'])){
                            echo $row_batch['fees']; 
                          }
                          ?>" type="text" disabled>
                        </div>
                      </div>
                    </td>
                  </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          <div class="form-group register-btn">
             <button type="submit" name="student_reg" value="student_reg" class="btn btn-success">Submit</button>
          </div>
        </form>
       </div>
        
       </div>
    </div>
  </div>



<?php
include('include/footer.php');
?>

<script type="text/javascript">
  $(document).ready(function() {
        /*document.getElementById("mnuaboutus").classList.add('mnubrder');*/
    document.getElementById("mnucenters").className = "mnubrder";
  });   
</script>

<script src="backend/admin/vendors/jquery/dist/jquery.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script>
    // AJAX call for autocomplet
$j(document).ready(function(){
  var state = null;
    $j("#state_sarch").change(function(){
         state =$j(this).val();
        // window.location.href = "live-classes.php?stat="+state+"";
        $.ajax({
        type: "POST",
        url: "backend/admin/ajaxphp/city_fetch.php",
        data:'state='+$(this).val(),
        success: function(data){
            // console.log(data);
            // $("#suggesstion-box").show();
            $j("#city_reg").html(data);
            // $("#trnto").css("background","#FFF");
        }
        });
  });
});

</script>


<script>
$j(document).ready(function(){

    $j("#email_check").blur(function(){
         email =$j(this).val();
         // alert(email);
        // window.location.href = "live-classes.php?stat="+state+"";
        $.ajax({
        type: "POST",
        url: "ajax/email_check.php",
        data:{ email : email,},
        success: function(data){
            console.log(data);
            if (data == 1) {
               $j("#emailmsg").html('<p id="emailmsg" class="alert alert-danger">Email Already Exist</p>');
               $j("#email_check").val('');
            }else{
               $j("#emailmsg").html('');
            }
        }
        });
  });
});

</script>
  
