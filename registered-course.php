<?php
session_start();
if(empty($_SESSION['user_id']) || empty($_SESSION['email'])) {
    header("location:index.php");
}
include('include/header.php');
?>

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
    <h1 style="margin-top: 90px;">Live Classes</h1>
    <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
    <span>Live Classes</span></p>
        
  </div>
</div>

<section> 
  <div class="section border-bottom-grey">
    <div class="container">
      <div class="breadcrumb-1">
        
      </div>
    </div>
  </div>
</section>
<br>
<!-- ############## Content Start Here ################# -->
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-12" id="print_div">
      <div class="">
        <div class="row">
         
        </div>
        <div class="panel panel-default">
          <!--<div class="panel-heading"><h5>Complete Online Admission Form In Quick 4 Steps!!!</h5></div>-->
          <div class="panel-body">
            <div class="row text-center"> 
          <div class="col-md-12">
            <h3 class="title-content"> Registered Course Details</h3>
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
                      <th scope="col">Center Details
                      </th>
                      <th scope="col">Fee Paid
                      </th>
                      <th scope="col">Date
                      </th>
                     <!--  <th scope="col">Action
                      </th> -->
                    </tr>
                    
                      <?php
                        $sql = "SELECT `batch`.`name` as batch_name, `batch`.`start_date` as batch_start_date, `batch`.`end_date` as batch_end_date, `batch`.`start_time` as batch_start_time, `batch`.`end_time` as batch_end_time, `batch`.`fees` AS batch_fees, `student_batch_registration`.`reg_date` as reg_date, `course`.`name` as course_name, `center`.`address` as center_address, `state`.`name` as center_state, `city`.`name` as center_city, `center`.`pin` as center_pin, `center`.`email` as center_email, `center`.`phone_no` as center_phone, `center`.`name` as center_name FROM `student_batch_registration` INNER JOIN `batch` on `batch`.`id` = `student_batch_registration`.`batch_id` INNER JOIN `course` ON  `course`.`id`=`student_batch_registration`.`course_id` INNER JOIN `center` ON `center`.`id`=`student_batch_registration`.`center_id` INNER JOIN `state` ON `state`.`id`=`center`.`state_id` INNER JOIN `city` ON `city`.`city_id` =`center`.`city_id` WHERE  `student_id`='$_SESSION[user_id]'";
                        if ($res = $connection->query($sql)) {
                          $count = 1;
                          while($row_batch = $res->fetch_assoc()){
                          print '<tr>
                      <td align="center">'.$count.'
                      </td><td style="width:130px;">'.$row_batch['batch_name'].'</td>
                          <td style="width:130px;">'.$row_batch['course_name'].'</td>
                          <td style="width:250px;">'.$row_batch['batch_start_date'].'</td>
                          <td style="width:200px;">'.$row_batch['batch_end_date'].'</td>
                          <td style="width:200px;">'.$row_batch['batch_start_time'].'-'.$row_batch['batch_end_time'].'</td>
                          <td style="width:200px;">'.$row_batch['center_name'].'<br>'.$row_batch['center_address'].'<br>'.$row_batch['center_city'].','.$row_batch['center_state'].'-'.$row_batch['center_pin'].'<br>'.$row_batch['center_phone'].'<br>'.$row_batch['center_email'].'</td>
                           <td style="width:200px;">'.$row_batch['batch_fees'].'</td>
                           <td style="width:200px;">'.$row_batch['reg_date'].'</td></tr>';
                           $count++;
                        }
                      }
                  
                      ?>
                      
                      
                     <tr>
                      <td align="center" colspan="9">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                       
                          <button class="btn btn-primary" onclick="printDiv() "><i class="fa fa-print" aria-hidden="true">  Print</i></button>
                       
                      </td>
                    </tr>
                     </tbody>
                </table>
              </div>    
            </div>
            <!-- ###################################################### -->    
          </div>
        </div>
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
   <!-- <script>

<script> var $j = jQuery.noConflict(true);</script> -->
<script>
    // AJAX call for autocomplet


  function printDiv() 
  {

    var divToPrint=document.getElementById('print_div');

    var newWin=window.open('','Print-Window');

    newWin.document.open();

    newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

    newWin.document.close();

    setTimeout(function(){newWin.close();},10);

  }
</script>



