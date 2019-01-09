<?php
require_once "include/header.php";

function getCenters($connection){
  $sql = "SELECT * FROM `center` ORDER BY `id` DESC";
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
                <td><a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
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
                    <h2>All Centers<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Name</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Address</th>
                          <th>Pin</th>
                          <th>Email</th>
                          <th>Phone No</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        getCenters($connection);
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
