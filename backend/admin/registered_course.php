<?php
require_once "include/header.php";

function showMessage($msg){
    if ($msg == 3) {
      print "<p class='alert alert-success'>Batch Updated Successfully</p>";
    }
    if ($msg == 4) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 5) {
      print "<p class='alert alert-danger'>Batch Deleted Successfully</p>";
    }
    if ($msg == 6) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }

function getCourse($connection){
  $sql = "SELECT * FROM `batch` WHERE `end_date` >= '2019-01-09' ORDER BY `id` DESC";
  if ($res = $connection->query($sql)) {
    $sl_count = 1;
    while($batch = $res->fetch_assoc()){
      print '<tr>
                <td>'.$sl_count.'</td>
                <td>'.$batch['name'].'</td>';
        $sql_center_name = "SELECT `name` FROM `center` WHERE `id` = '$batch[center_id]'";
        if ($res_center_name = $connection->query($sql_center_name)) {
           $center_row = $res_center_name->fetch_assoc();
           $center_name = $center_row['name'];
        }
      print '<td>'.$center_name.'</td>
                <td>'.$batch['start_date'].'</td>
                <td>'.$batch['end_date'].'</td>
                <td>'.$batch['start_time'].'</td>
                <td>'.$batch['end_time'].'</td>
                <td><a href="edit_batch.php?b_id='.$batch['id'].'" class="btn btn-success">Edit</a>
                    <a href="php/course/batch_delete.php?b_id='.$batch['id'].'" class="btn btn-danger">Delete</a>
                </td>
              </tr>';
      $sl_count++;
    }

  }
}
?>
<div class="clearfix"></div>
<div class="right_col" role="main">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registered Course<small></small></h2>
                    <div class="clearfix"></div>
                      <?php 
                        if (isset($_GET['msg'])) {
                          showMessage($_GET['msg']);
                        }           
                      ?>
                  </div>
                  <div class="x_content">
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr class="headerStyle" align="center">
                          <th scope="col">Sr.No
                          </th>
                          <th scope="col">Student Name/Id
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
                          <th scope="col">Comments
                          </th>
                          <th scope="col">Total Fees
                          </th>
                          <th scope="col">Date
                          </th>
                          <th scope="col">Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                        $sql = "SELECT `batch`.`name` as batch_name, `batch`.`start_date` as batch_start_date, `batch`.`end_date` as batch_end_date, `batch`.`start_time` as batch_start_time, `batch`.`end_time` as batch_end_time, `batch`.`fees` AS batch_fees, `student_batch_registration`.`reg_date` as reg_date, `course`.`name` as course_name, `center`.`address` as center_address, `state`.`name` as center_state, `city`.`name` as center_city, `center`.`pin` as center_pin, `center`.`email` as center_email, `center`.`phone_no` as center_phone, `center`.`name` as center_name,`users`.`f_name` as sutdent_f_name, `users`.`l_name` as sutdent_lname, `users`.`id` as sutdent_id FROM `student_batch_registration` INNER JOIN `batch` on `batch`.`id` = `student_batch_registration`.`batch_id` INNER JOIN `course` ON  `course`.`id`=`student_batch_registration`.`course_id` INNER JOIN `center` ON `center`.`id`=`student_batch_registration`.`center_id` INNER JOIN `state` ON `state`.`id`=`center`.`state_id` INNER JOIN `city` ON `city`.`city_id` =`center`.`city_id` INNER JOIN `users` on `users`.`id` = `student_batch_registration`.`student_id` WHERE  `is_paid`='0'";
                        if ($res = $connection->query($sql)) {
                          $count = 1;
                          while($row_batch = $res->fetch_assoc()){
                          print '<tr>
                      <td align="center">'.$count.'
                      </td>
                      <td align="center">'.$row_batch['sutdent_f_name'].' '.$row_batch['sutdent_lname'].'/'.$row_batch['sutdent_id'].'
                      </td>
                      <td style="width:130px;">'.$row_batch['batch_name'].'</td>
                          <td style="width:130px;">'.$row_batch['course_name'].'</td>
                          <td style="width:250px;">'.$row_batch['batch_start_date'].'</td>
                          <td style="width:200px;">'.$row_batch['batch_end_date'].'</td>
                          <td style="width:200px;">'.$row_batch['batch_start_time'].'-'.$row_batch['batch_end_time'].'</td>
                          <td style="width:200px;"><textarea disabled></textarea></td>
                           <td style="width:200px;">'.$row_batch['batch_fees'].'</td>
                           <td style="width:200px;">'.$row_batch['reg_date'].'</td>
                            <td style="width:200px;"><button type="submit" class="btn btn-success">Save</button>
                            <button type="submit" id="edit'.$count.'" class="btn btn-success" onclick="edit_reg('.$count.')" >Edit</button></td>
                            </tr>';
                           $count++;
                        }
                      }
                  
                      ?>                        
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<?php
require_once "include/footer.php";
?>

<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });

  function edit_reg($id){
    alert($id);
  }
</script>