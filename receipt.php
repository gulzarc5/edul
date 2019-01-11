<?php
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
            <h3 class="title-content">Thank You for Registering for the Course</h3>
          </div>
       </div>
              <div class="row text-center">  
              </div>
              <div class="row">
                <h3 class="pdd"> &nbsp; &nbsp; Course Details
                </h3>
              </div>
              <div class="row tblscroll">
                <div class="table-responsive tblpd"> 
                  <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3">
                    <tbody>
                      <tr class="headerStyle" align="center">
                        <th align="center">S#
                        </th>
                        <th align="center">City 
                        </th>
                        <th align="center">Address 
                        </th>
                        <th align="center">Contact No
                        </th>
                        <!--<th align="center">View</th>-->
                      </tr>
                      <tr>
                        <td align="center">1
                        </td>
                        <?php 
                        if (isset($_GET['batch'])) {
                          $sql_center ="SELECT `center`.`name` as center_name, `center`.`address` as center_address, `center`.`pin` as center_pin, `center`.`phone_no` as center_phone FROM `batch` INNER JOIN `center` ON `center`.`id` = `batch`.`center_id` WHERE `batch`.`id`='$_GET[batch]'";
                          if ($res_center = $connection->query($sql_center) ) {
                             $row_center = $res_center->fetch_assoc();
                             print '<td>'.$row_center['center_name'].'</td>
                             <td>
                              <a href="center-details.php?&amp;id=136">'
                               .$row_center['center_address'].'-'.$row_center['center_pin'].                               
                              '</a>
                            </td>
                            <td>'.$row_center['center_phone'].'</td>';
                          }
                        }
                        ?>
                      </tr>
                    </tbody>
                  </table>
                </div>    
              </div>
            <!-- ################ Approved Batches List ################# -->
            <div class="row">
              <h3 class="pdd">  &nbsp;  &nbsp;  Batches
              </h3>
            </div>
            <div class="row tblscroll">
              <div class="table-responsive tblpd"> 
                <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3">
                  <tbody>
                    <tr class="headerStyle" align="center">
                      <th scope="col">Sr.No
                      </th>
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
                      <th scope="col">Action
                      </th>
                    </tr>
                    <tr>
                      <td align="center">1
                      </td>
                      <?php
                       if (isset($_GET['batch'])) {
                        $sql = "SELECT * FROM `batch` WHERE `id`='$_GET[batch]'";
                        if ($res = $connection->query($sql)) {
                          $row_batch = $res->fetch_assoc();
                          print '<td style="width:130px;">'.$row_batch['name'].'</td>
                          <td style="width:250px;">'.$row_batch['start_date'].'</td>
                          <td style="width:200px;">'.$row_batch['end_date'].'</td>
                          <td style="width:200px;">'.$row_batch['start_time'].'-'.$row_batch['end_time'].'</td>
                           <td style="width:200px;">'.$row_batch['fees'].'</td>';
                        }
                      }
                      ?>
                      
                      
                     
                      <td align="center">
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
   <script>

<script>var $j = jQuery.noConflict(true);</script>
<script>
    // AJAX call for autocomplet
$j(document).ready(function(){
  var state = null;
    $j("#state_srch").change(function(){
         state =$j(this).val();
        window.location.href = "live-classes.php?stat="+state+"";
  });




});

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

