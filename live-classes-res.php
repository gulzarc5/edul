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
                <select name="state">
                    <option  selected="" value="">--Select--</option>
                     <option selected="" value="">FM And ECO#November(07 : 00-09 : 05-Daily)</option>
                     <option selected="" value="">Advance Accounts#November(09 : 20-11 : 35-Daily)</option>
                     <option selected="" value="">EIS#November(11 : 40-01 : 30-Daily)</option>
                    

            

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
                    <tr>
                      
                    
                      <td style="width:270px;">FM And ECO#November(07 : 00-09 : 05-Daily)
                      </td>
                      <td style="width:130px;">2018-11-16
                      </td>
                      <td style="width:200px;">2019-01-15
                      </td>
                      <td style="width:200px;">07 : 00-09 : 05
                      </td>
                      <td style="width:200px;">11800
                      </td>
                    
                    </tr>
                  </tbody>
                </table>
              </div>    
            </div>
            
            <div id="batch">

            </div>
            
            <div class="form-group inline mrgtp">
             
                         <a href="live-classes-log-res.php" class="btn btn-primary">Continue</a>
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

