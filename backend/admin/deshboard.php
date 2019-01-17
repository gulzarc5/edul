<?php
require_once "include/header.php";


function getCentersDeshboard($connection){
  $sql = "SELECT * FROM `center` ORDER BY `id` DESC LIMIT 5";
  if ($res = $connection->query($sql)) {
    $sl_count = 1;
    while($center = $res->fetch_assoc()){
      print '<tr>
                <td>'.$sl_count.'</td>
                <td>'.$center['name'].'</td>
                <td>'.$center['state_id'].'</td>
                <td>'.$center['city_id'].'</td>
                <td>'.$center['address'].'</td>
                <td>'.$center['pin'].'</td>
                <td>'.$center['email'].'</td>
                <td>'.$center['phone_no'].'</td>
                
              </tr>';
      $sl_count++;
    }

  }
}
?>


  <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count green">
                <?php
                $user_count_sql = "SELECT COUNT(*) as total_user FROM `users` WHERE `user_type_id`='2'";
                if ($res_user_count = $connection->query($user_count_sql)) {
                   $row_user_count = $res_user_count->fetch_assoc();
                   echo $row_user_count['total_user'];
                }else{
                  echo 0;
                }
                ?>
                  
                </div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Books</span>
              <div class="count green">
                --
              </div>
             <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Course</span>
              <div class="count green">
                <?php
                $course_count_sql = "SELECT COUNT(*) as total_course FROM `course`";
                if ($res_course_count = $connection->query($course_count_sql)) {
                   $row_course_count = $res_course_count->fetch_assoc();
                   echo $row_course_count['total_course'];
                }else{
                  echo 0;
                }
                ?>
              </div>
             <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Registration</span>
              <div class="count green">
                 <?php
                $registration_count_sql = "SELECT COUNT(*) as total_registration FROM `student_batch_registration`";
                if ($res_registration_count = $connection->query($registration_count_sql)) {
                   $row_registration_count = $res_registration_count->fetch_assoc();
                   echo $row_registration_count['total_registration'];
                }else{
                  echo 0;
                }
                ?>
              </div>
             <!--  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Orders</span>
              <div class="count green">--</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Centers</span>
              <div class="count green">
                <?php
                $center_count_sql = "SELECT COUNT(*) as total_center FROM `center`";
                if ($res_center_count = $connection->query($center_count_sql)) {
                   $row_center_count = $res_center_count->fetch_assoc();
                   echo $row_center_count['total_center'];
                }else{
                  echo 0;
                }
                ?>
              </div>
             <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
          </div>
          <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="container" style="margin-top: 30px;">
              <div class="row">
                <div class="col-md-4">
                </div>
                    <div class="">
                      <div class="row">
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row text-center"> 
                            <div class="col-md-12">
                              <h3 class="title-content">Last 5 (Five) Registered Course</h3>
                            </div>
                          </div>
                          <div class="row text-center">  
                          </div>
                          <!-- ################ Approved Batches List ################# -->
           
                          <div class="row tblscroll">
                            <div class="table-responsive tblpd"> 
                              <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3">
                                <tbody>
                                  <tr class="headerStyle" align="center">
                                    <th scope="col">Sr.No
                                    </th>
                                    <th scope="col">Batch Name
                                    </th>
                                    <th scope="col">Course Name
                                    </th>
                                    <th scope="col">Start Date
                                    </th>
                                    <th scope="col">End Date
                                    </th>
                                    <th scope="col">Timing
                                    </th>
                                    <th scope="col">Fee
                                    </th>
                                    <th scope="col">Date
                                    </th>
                                   <!--  <th scope="col">Action
                                    </th> -->
                                  </tr>
                    
                                  <?php
                                    $sql = "SELECT `batch`.`name` as batch_name, `batch`.`start_date` as batch_start_date, `batch`.`end_date` as batch_end_date, `batch`.`start_time` as batch_start_time, `batch`.`end_time` as batch_end_time, `batch`.`fees` AS batch_fees, `student_batch_registration`.`reg_date` as reg_date, `course`.`name` as course_name, `center`.`address` as center_address, `state`.`name` as center_state, `city`.`name` as center_city, `center`.`pin` as center_pin, `center`.`email` as center_email, `center`.`phone_no` as center_phone, `center`.`name` as center_name FROM `student_batch_registration` INNER JOIN `batch` on `batch`.`id` = `student_batch_registration`.`batch_id` INNER JOIN `course` ON  `course`.`id`=`student_batch_registration`.`course_id` INNER JOIN `center` ON `center`.`id`=`student_batch_registration`.`center_id` INNER JOIN `state` ON `state`.`id`=`center`.`state_id` INNER JOIN `city` ON `city`.`city_id` =`center`.`city_id` ORDER BY `student_batch_registration`.`id` DESC LIMIT 5";
                                    if ($res = $connection->query($sql)) {
                                      $count = 1;
                                      while($row_batch = $res->fetch_assoc()){
                                      print '<tr>
                                  <td align="center">'.$count.'</td>
                                  <td style="width:130px;">'.$row_batch['batch_name'].'</td>
                                  <td style="width:130px;">'.$row_batch['course_name'].'</td>
                                  <td style="width:250px;">'.$row_batch['batch_start_date'].'</td>
                                  <td style="width:200px;">'.$row_batch['batch_end_date'].'</td>
                                  <td style="width:200px;">'.$row_batch['batch_start_time'].'-'.$row_batch['batch_end_time'].'</td>
                                  <td style="width:200px;">'.$row_batch['batch_fees'].'</td>
                                  <td style="width:200px;">'.$row_batch['reg_date'].'</td>
                                  </tr>';
                                       $count++;
                                    }
                                  }
                              
                                  ?>
                                <tr>
                                  <td align="center" colspan="8">
                                      <a href="registered_course.php" class="btn btn-primary">Show More</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>    
                        </div>
            <!-- ###################################################### -->  
            <div class="row text-center"> 
              <div class="col-md-12">
                <h3 class="title-content">Last 5 (Five) Added Centers</h3>
              </div>
            </div>
            <div class="row text-center">  </div>
                            <div class="table-responsive tblpd"> 
                              <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3">
                                <tbody>
                                  <tr class="headerStyle" align="center">
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Pin</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                  </tr>
                    
                                  <?php
                                    getCentersDeshboard($connection)
                                  ?>
                                <tr>
                                  <td align="center" colspan="8">
                                      <a href="center_list.php" class="btn btn-primary">Show More</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>    
                      





          </div>
        </div>






      </div>
  </div>
</div>
            </div>
          </div>
          <br/>

        </div>
        <!-- /page content -->

        

<?php
require_once "include/footer.php";
?>