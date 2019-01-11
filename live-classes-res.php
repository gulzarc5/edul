<?php
include('include/header.php');

function getBatchList($connection,$batch_id,$center_id){
  $sql = "SELECT * FROM `batch` WHERE `center_id` = '$center_id'";
  if ($res = $connection->query($sql)) {
    while($batch_row = $res->fetch_assoc()){
      if ($batch_row['id'] == $batch_id) {
         print '<option selected value="'.$batch_row['id'].'">'.$batch_row['name'].'</option>';
      }else{
         print '<option value="'.$batch_row['id'].'">'.$batch_row['name'].'</option>';
      }
     
    }
  }
}


function  getBatchDetails($connection,$batch_id,$center_id){
   $sql ="SELECT * FROM `batch` WHERE `id`='$batch_id'";
    if ($res = $connection->query($sql)) {
      $batch = $res->fetch_assoc();
        print '
                <td style="width:270px;">'.$batch['name'].'</td>
                <td style="width:130px;">'.$batch['start_date'].'</td>
                <td style="width:200px;">'.$batch['end_date'].'</td>
                <td style="width:200px;">'.$batch['start_time'].'-'.$batch['end_time'].'</td>
                <td style="width:200px;">'.$batch['fees'].'</td>
              ';
    }
}


?>

<div class="container-fluid bg-no-overlay">
  <div class="row text-center">
    <h1 style="margin-top: 90px;">Live Classes</h1>
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
        <h5 class="title-content">STEP 3 : Select Batch</h5>
        <h5 class="title-content">Please select batch to view Date,Time &amp; Fee details. </h5>
      </div>
    </div>
    
    <div class="panel-body text-center">
      <form method="POST" name="frmbatch" action="" class="form-horizontal">
        <div class="form-group inline">
          <input type="hidden" name="course" value="">
          <label class="col-md-4 col-lg-4 col-xs-12 col-sm-6 control-label" style="margin-left:1%">Please select batch : </label>
          
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
            <select name="state" id="select_batch">
              <option  selected="" value="">--Select--</option>

              <?php 
                if (isset($_POST['batch_id']) && isset($_POST['center_id'])) {
                   getBatchList($connection,$_POST['batch_id'],$_POST['center_id']);
                }
               ?>
            </select>
          </div>
        </div>

              <div class="row tblscroll">
              <div class="table-responsive tblpd"> 
                <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:13px;" cellspacing="0" cellpadding="3">
                  <tbody>
                    <tr class="headerStyle" align="center">
                     
                      <th scope="col">Batch Name
                      </th>
                      <th scope="col">Start Date
                      </th>
                      <th scope="col">End Date
                      </th>
                      <th scope="col">Timing
                      </th>
                      <th scope="col">Total Fees (In Rs.)
                      </th>
                      
                    </tr>
                    <tr id="batch_detail_tr">
                    <?php 
                      if (isset($_POST['batch_id']) && isset($_POST['center_id'])) {
                         getBatchDetails($connection,$_POST['batch_id'],$_POST['center_id']);
                      }
                     ?>
                    </tr>
                    
                  </tbody>
                </table>
              </div>    
            </div>
            
            <div id="batch">

            </div>
            
            <div class="form-group inline mrgtp">
             
              <a href="web_site_php/add_course_session.php?batch_id=<?php echo $_POST['batch_id']; ?>" class="btn btn-primary">Continue</a>
            </div>
            
             
            
            
            
         </form>
       </div>
        
       </div>
    </div>
  </div> 
 <!-- ############## Content Start Here ################# -->





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
$j(document).ready(function(){

    $j("#select_batch").change(function(){
         select_batch =$j(this).val();
        // window.location.href = "live-classes.php?stat="+state+"";
        $.ajax({
        type: "POST",
        url: "ajax/batch_detail.php",
        data:'select_batch='+$(this).val(),
        success: function(data){
            // console.log(data);

              $j("#batch_detail_tr").html(data);

        }
        });
  });
});

</script>


