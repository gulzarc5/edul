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
    <div class="col-md-12">
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
            <form method="POST" name="frmcenterlist" class="form-horizontal">
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
                        <td>PUNE
                        </td>
                        <td>
                          <a href="center-details.php?&amp;id=136">
                            OFFICE NO.15B 2 nd floor SHUKRAWAR PETH OPP.CHINCHEHI ALIM NEAR BY BSNL TEL.EXCHANGE BAJIRAO ROAD PUNE-411002                                
                          </a>
                        </td>
                        <td>9011851796
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>    
              </div>
            </form>
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
                      <td style="width:130px;">FM And ECO#November(07 : 00-09 : 05-Daily)
                      </td>
                      <td style="width:250px;">2018-11-16
                      </td>
                      <td style="width:200px;">2019-01-15
                      </td>
                      <td style="width:200px;">07 : 00-09 : 05
                      </td>
                      <td style="width:200px;">11800
                      </td>
                      <td align="center">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                        <form method="POST" action="select-batch">
                          <input type="hidden" name="course" value="CA INTERMEDIATE">
                          <input type="hidden" name="state" value="MAHARASHTRA">
                          <input type="hidden" name="city" value="PUNE">
                          <input type="hidden" name="center" value="136">
                          <input type="hidden" name="batch" id="txtbatchid" value="7731">
                          <a href="#" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true">  Print</i></a>
                        </form>
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

if("MAHARASHTRA"=='')
{document.getElementById('').value='0';
}
else{
document.getElementById('StateSearch').value="MAHARASHTRA";
}


if("PUNE"=='')
{document.getElementById('ContentPlaceHolder1_ddlCitySearch').value='0';
}
else{
document.getElementById('ContentPlaceHolder1_ddlCitySearch').value="PUNE";
}


function search_center(city,state)
{
  window.location.href="virtual-classes-center-list?city="+city+"&state="+state;
 
}
function getcity(state)
{
 window.location.href="virtual-classes-center-list?state="+state;
}
</script>

