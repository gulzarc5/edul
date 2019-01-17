<?php
include('include/header.php');
include "backend/database_connection/connection.php";
function showState($connection,$state = null){
  $sql = "SELECT * FROM `state`";
  if ($res = $connection->query($sql)) {
      while($states = $res->fetch_assoc()){
        if (!empty($state)) {
          if ($state == $states['id']) {
             print '<option value="'.$states['id'].'" selected>'.$states['name'].'</option>';
          }else{
             print '<option value="'.$states['id'].'">'.$states['name'].'</option>';
          }
        }else{
          print '<option value="'.$states['id'].'">'.$states['name'].'</option>';
        }
        
      }      
  }
}

function showcity($connection,$state,$city = null){
  $sql = "SELECT * FROM `city` WHERE `state_id`='$state'";
  if ($res = $connection->query($sql)) {
      while($city_row = $res->fetch_assoc()){
        if (!empty($city)) {
          if ($city_row['city_id'] == $city) {
            print '<option  value="'.$city_row['city_id'].'" selected>'.$city_row['name'].'</option>';
          }else{
            print '<option  value="'.$city_row['city_id'].'">'.$city_row['name'].'</option>';
          }
        }else{
          print '<option  value="'.$city_row['city_id'].'">'.$city_row['name'].'</option>';
        }        
      }      
  }
}

function displayAllCenters($connection,$state = null,$city = null){

  $sql = "SELECT * FROM `center`";
  if (!empty($state)) {
    $sql = $sql."WHERE `state_id` = '$state'";
  }
  if (!empty($city)) {
    $sql = $sql."AND `city_id` = '$city'";
  }
  $sql = $sql." ORDER BY `id` DESC";
  if ($res = $connection->query($sql)) {
    $count =1 ;
    print '<div class="row">
            <h3 class="pdd"> &nbsp; &nbsp; All Centers</h3>
          </div>
          <div class="row tblscroll">
            <div class="table-responsive tblpd"> 
              <table class="table table-striped table-bordered table-hover" id="tblcenterlist" style="color:#333333;font-size:11px;" cellspacing="0" cellpadding="3">
                <tbody>
                  <tr class="headerStyle" align="center">
                    <th align="center">S#</th>
                    <th align="center">City</th>
                    <th align="center">Address</th>
                    <th align="center">Contact No</th>
                  </tr>';
    while($centers_row = $res->fetch_assoc()){
    print '
                  <tr>
                    <td align="center">'.$count.'</td>';
                    $sql_city = "SELECT * FROM `city` WHERE `city_id`='$centers_row[city_id]'";
                    $city_name = null;
                    if ($res_city = $connection->query($sql_city)) {
                      $row_city = $res_city->fetch_assoc();
                      $city_name = $row_city['name'];
                        print '<td>'.$city_name.'</td>';
                    }

                    print '<td>
                      <a href="#">'.
                         $centers_row ['address'].','.$city_name.'-'.$centers_row ['pin']                           
                      .'</a>
                    </td>
                    <td>'.$centers_row ['phone_no'].'</td>
                  </tr>
                ';
          $count++;
        }
        print '</tbody>
              </table>
            </div>    
          </div>';
    # code...
  }
}

function getBatch($connection,$state = null,$city = null){
  

  if (!empty($state)) {
    $get_center = "SELECT `id` FROM `center` WHERE `state_id`='$state'";
    if (!empty($city)) {
      $get_center = $get_center."AND `city_id`='$city'";
    }
    if ($res_center = $connection->query($get_center)) {
       print '<div class="row">
                <h3 class="pdd">  &nbsp;  &nbsp;  All Batches
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
                      </tr>';
        $count = 1;
        while ($center_row_data = $res_center->fetch_assoc()) {
          $sql ="SELECT * FROM `batch` WHERE `center_id`='$center_row_data[id]' ORDER BY `id` DESC";
          if ($res = $connection->query($sql)) {
              while ($batch = $res->fetch_assoc()) {
                print '<tr>
                  <td align="center">'.$count.'</td>
                  <td style="width:130px;">'.$batch['name'].'</td>
                  <td style="width:250px;">'.$batch['start_date'].'</td>
                  <td style="width:200px;">'.$batch['end_date'].'</td>
                  <td style="width:200px;">'.$batch['start_time'].'-'.$batch['end_time'].'</td>
                  <td style="width:200px;">'.$batch['fees'].'</td>
                  <td align="center">
                    <form method="POST" action="live-classes-res.php">
                      <input type="hidden" name="batch_id" value="'.$batch['id'].'">
                      <input type="hidden" name="center_id" value="'.$batch['center_id'].'">
                      <button type="submt" class="btn btn-primary">Register</button>
                    </form>
                  </td>
                </tr>';
              $count++;
              }
          }
        }
         print '</tbody>
          </table>
        </div>    
      </div>';
    }
  }else{
    $sql ="SELECT * FROM `batch` ORDER BY `id` DESC";
    if ($res = $connection->query($sql)) {
    $count = 1;
    print '<div class="row">
                <h3 class="pdd">  &nbsp;  &nbsp;  All Batches
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
                      </tr>';
    while($batch = $res->fetch_assoc()){
      print '<tr>
                <td align="center">'.$count.'</td>
                <td style="width:130px;">'.$batch['name'].'</td>
                <td style="width:250px;">'.$batch['start_date'].'</td>
                <td style="width:200px;">'.$batch['end_date'].'</td>
                <td style="width:200px;">'.$batch['start_time'].'-'.$batch['end_time'].'</td>
                <td style="width:200px;">'.$batch['fees'].'</td>
                <td align="center">
                  <form method="POST" action="live-classes-res.php">
                    <input type="hidden" name="batch_id" value="'.$batch['id'].'">
                    <input type="hidden" name="center_id" value="'.$batch['center_id'].'">
                    <button type="submt" class="btn btn-primary">Register</button>
                  </form>
                </td>
              </tr>';
      $count++;
    }
    print '</tbody>
          </table>
        </div>    
      </div>';
    
    }
  }

  
}
?>
<style type="text/css">
    
</style>
<div class="container tophead">
    <div class="row text-center">
    <h1 style="">Live Classes</h1>
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
    <div class="col-md-12">
      <div class="">
        <div class="row">
          <h3 class="title pdd" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRANCHISEES LIST 
          </h3>
        </div>
        <div class="panel panel-default">
           
          <div class="panel-body">
            <form method="POST" name="frmcenterlist" class="form-horizontal">
              <!-- FRANCHISEES LIST Selector End-->
              <div class="row text-center">
                <!-- State Div        -->
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">	
                  <div class="form-group" align="left">
                    <label class="col-lg-2 col-md-2 col-xs-12 col-sm-12 control-label">State:
                    </label>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                      <select name="StateSearch"  id="state_srch" class="form-control">
                        <option selected value="">--Show All--
                        </option>
                        <?php
                        if (isset($_GET['stat'])) {
                           showState($connection,$_GET['stat']);
                         }else{                          
                          showState($connection); 
                         } 
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End of state div -->
                <!-- City Div -->
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">	
                  <div class="form-group" align="left">
                    <label class="col-lg-2 col-md-2 col-xs-12 col-sm-12 control-label">City:
                    </label>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                      <select name="ctl00$ContentPlaceHolder1$ddlCitySearch"  id="city_list" class="form-control">
                        <option selected="selected" value="">--Show All--
                        </option>
                        <?php
                         if (isset($_GET['city']) && isset($_GET['stat'])) {
                           showcity($connection,$_GET['stat'],$_GET['city']);
                         }elseif (isset($_GET['stat'])) {
                           showcity($connection,$_GET['stat']);
                         }
                         ?>
                       
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End of city Div -->
                <div class="col-md-2 col-lg-2">
                  <input type="button" class="btn btn-primary btn-sm" value="Reset" onclick="window.location.href='virtual-classes-center-list'">
                </div>
              </div>
              <!-- FRANCHISEES LIST Selector End-->

              <!-- Div for displaying center -->
              <div id="display_center">

                <?php 
                  if (isset($_GET['city']) && isset($_GET['stat'])) {
                    displayAllCenters($connection,$_GET['stat'],$_GET['city']);
                  }elseif (isset($_GET['stat'])) {
                    displayAllCenters($connection,$_GET['stat']);
                  }else{
                    displayAllCenters($connection);
                  }
                ?>
               
               
              </div>
              <!-- ENd of center display div -->
                 
            </form>
            <!-- ################ Approved Batches List ################# -->
            <div id="batch_list">
              <?php 
                  if (isset($_GET['city']) && isset($_GET['stat'])) {
                    getBatch($connection,$_GET['stat'],$_GET['city']);
                  }elseif (isset($_GET['stat'])) {
                    getBatch($connection,$_GET['stat']);
                  }else{
                    getBatch($connection);
                  }
              ?>
              <?php 
              // getBatch($connection); 
              ?>
              
              
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
<script src="backend/admin/vendors/jquery/dist/jquery.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script>
    // AJAX call for autocomplet
$j(document).ready(function(){
  var state = null;
    $j("#state_srch").change(function(){
         state =$j(this).val();
        window.location.href = "live-classes.php?stat="+state+"";
    //     $.ajax({
    //     type: "POST",
    //     url: "backend/admin/ajaxphp/city_fetch.php",
    //     data:'state='+$(this).val(),
    //     success: function(data){
    //         // console.log(data);
    //         // $("#suggesstion-box").show();
    //         $j("#city_list").html(data);
    //         // $("#trnto").css("background","#FFF");
    //     }
    //     });
  });


    $j("#city_list").change(function(){
        state =$j("#state_srch").val();
         city =$j(this).val();
        window.location.href = "live-classes.php?stat="+state+"&city="+city+"";
  });
});

</script>
<script>
// if("MAHARASHTRA"=='')
// {document.getElementById('').value='0';
// }
// else{
// document.getElementById('StateSearch').value="MAHARASHTRA";
// }


// if("PUNE"=='')
// {document.getElementById('ContentPlaceHolder1_ddlCitySearch').value='0';
// }
// else{
// document.getElementById('ContentPlaceHolder1_ddlCitySearch').value="PUNE";
// }


// function search_center(city,state)
// {
//   window.location.href="virtual-classes-center-list?city="+city+"&state="+state;
 
// }
// function getcity(state)
// {
//  window.location.href="virtual-classes-center-list?state="+state;
// }
</script>
