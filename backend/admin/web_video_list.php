<?php
require_once "include/header.php";
function showMessage($msg){
    if ($msg == 1) {
      print "<p class='alert alert-success'>Video Added Successfully</p>";
    }
    if ($msg == 2) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
     if ($msg == 3) {
      print "<p class='alert alert-success'>Video Deleted Successfully</p>";
    }
    if ($msg == 4) {
      print "<p class='alert alert-danger'>Something Wrong Please Try Again</p>";
    }
  }

function getimage($connection){
  $sql = "SELECT * FROM `gallery` WHERE `type`='2' ORDER BY `id` DESC";
  if ($res = $connection->query($sql)) {
    $sl_count = 1;
    while($video = $res->fetch_assoc()){
      print '<tr>
                <td>'.$sl_count.'</td>
                <td><iframe width="360" height="245" src="'.$video['source'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td>'.$video['date_added'].'</td>
                <td>
                    <a href="php/web_image_video/delete_video.php?v_id='.$video['id'].'" class="btn btn-danger">Delete</a>
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
                          <th>Date added</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        getimage($connection);
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
