<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Teacher Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 3) {
      print "<p class='alert alert-success'>Teacher Updated Successfully</p>";
    }
    if ($msg == 4) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
    if ($msg == 5) {
      print "<p class='alert alert-success'>Teacher Deleted Successfully</p>";
    }
    if ($msg == 6) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }

function getTeachers($connection){
  $sql = "SELECT * FROM `teachers`";
  if ($res = $connection->query($sql)) {
    $sl_count = 1;
    while($teacher = $res->fetch_assoc()){
      print '<tr>
                <td>'.$sl_count.'</td>
                <td><img src="../uploads/teacher_image/'.$teacher['image'].'" height="100"></td>
                <td>'.$teacher['name'].'</td>
                <td>'.$teacher['gender'].'</td>
                <td>'.$teacher['email'].'</td>
                <td>'.$teacher['mobile'].'</td>
                <td>'.$teacher['qualification'].'</td>
                <td>'.$teacher['about'].'</td>
                <td>'.$teacher['dob'].'</td>
                <td><a href="edit_teacher.php?t_id='.$teacher['id'].'" class="btn btn-success">Edit</a>
                    <a href="php/teacher/delete_teacher.php?t_id='.$teacher['id'].'&img='.$teacher['image'].'" class="btn btn-danger">Delete</a>
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
                    <h2>Teacher<small>List</small></h2>
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
                        <tr>
                          <th>Sl</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Qualification</th>
                          <th>About</th>
                          <th>Date of Birth</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        getTeachers($connection);
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
