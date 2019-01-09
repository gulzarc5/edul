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
          <h3 class="title pdd" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FRANCHISEES LIST 
          </h3>
        </div>
        <div class="panel panel-default">
          <!--<div class="panel-heading"><h5>Complete Online Admission Form In Quick 4 Steps!!!</h5></div>-->
          <div class="panel-body">
            <form method="POST" name="frmcenterlist" class="form-horizontal">
              <div class="row text-center">       
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">	
                  <div class="form-group" align="left">
                    <label class="col-lg-2 col-md-2 col-xs-12 col-sm-12 control-label">State:
                    </label>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                      <select name="StateSearch" onchange="getcity(this.value)" id="StateSearch" class="form-control">
                        <option selected="selected" value="0">--Show All--
                        </option>
                        <option value="Assam">Assam
                        </option>
                        <option value="BIHAR">BIHAR
                        </option>
                        <option value="CHATTISGARH">CHATTISGARH
                        </option>
                        <option value="DELHI">DELHI
                        </option>
                        <option value="GUJARAT">GUJARAT
                        </option>
                        <option value="Haryana">Haryana
                        </option>
                        <option value="Himachal Pradesh">Himachal Pradesh
                        </option>
                        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir
                        </option>
                        <option value="JHARKHAND">JHARKHAND
                        </option>
                        <option value="KARNATAKA">KARNATAKA
                        </option>
                        <option value="Kerala">Kerala
                        </option>
                        <option value="MADHYA PRADESH">MADHYA PRADESH
                        </option>
                        <option value="MAHARASHTRA">MAHARASHTRA
                        </option>
                        <option value="Odisha">Odisha
                        </option>
                        <option value="PUNJAB">PUNJAB
                        </option>
                        <option value="RAJASTHAN">RAJASTHAN
                        </option>
                        <option value="Tamil Nadu">Tamil Nadu
                        </option>
                        <option value="Tamilnadu">Tamilnadu
                        </option>
                        <option value="Telangana">Telangana
                        </option>
                        <option value="UTTAR PRADESH">UTTAR PRADESH
                        </option>
                        <option value="UTTARAKHAND">UTTARAKHAND
                        </option>
                        <option value="West Bengal">West Bengal
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">	
                  <div class="form-group" align="left">
                    <label class="col-lg-2 col-md-2 col-xs-12 col-sm-12 control-label">City:
                    </label>
                    <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
                      <select name="ctl00$ContentPlaceHolder1$ddlCitySearch" onchange="search_center(document.getElementById('ContentPlaceHolder1_ddlCitySearch').value,document.getElementById('StateSearch').value);" id="ContentPlaceHolder1_ddlCitySearch" class="form-control">
                        <option selected="selected" value="0">--Show All--
                        </option>
                        <option value="Ahmednagar">Ahmednagar
                        </option>
                        <option value="AKOLA">AKOLA
                        </option>
                        <option value="AKOLA NEW">AKOLA NEW
                        </option>
                        <option value="AMRAVATI">AMRAVATI
                        </option>
                        <option value="AURANGABAD">AURANGABAD
                        </option>
                        <option value="Gondia">Gondia
                        </option>
                        <option value="Ichalkaranji">Ichalkaranji
                        </option>
                        <option value="JALGAON">JALGAON
                        </option>
                        <option value="Jalna">Jalna
                        </option>
                        <option value="Kolhapur">Kolhapur
                        </option>
                        <option value="Latur">Latur
                        </option>
                        <option value="Mira Road">Mira Road
                        </option>
                        <option value="Mumbai - Andheri West ">Mumbai - Andheri West 
                        </option>
                        <option value="MUMBAI(Andheri WEST)1)">MUMBAI(Andheri WEST)1)
                        </option>
                        <option value="Mumbai(GHATKOPAR)">Mumbai(GHATKOPAR)
                        </option>
                        <option value="Mumbai-Dadar">Mumbai-Dadar
                        </option>
                        <option value="NAGPUR">NAGPUR
                        </option>
                        <option value="Nanded ">Nanded 
                        </option>
                        <option value="Nashik ">Nashik 
                        </option>
                        <option value="PUNE">PUNE
                        </option>
                        <option value="solapur">solapur
                        </option>
                        <option value="THANE">THANE
                        </option>
                        <option value="Thane(New)">Thane(New)
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-lg-2">
                  <input type="button" class="btn btn-primary btn-sm" value="Reset" onclick="window.location.href='virtual-classes-center-list'">
                </div>
              </div>
              <div class="row">
                <h3 class="pdd"> &nbsp; &nbsp; MAHARASHTRA - PUNE
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
                        <!--<td align="center">
<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>
</td>-->
                      </tr>
                    </tbody>
                  </table>
                </div>    
              </div>
            </form>
            <!-- ################ Approved Batches List ################# -->
            <div class="row">
              <h3 class="pdd">  &nbsp;  &nbsp;  PUNE - Approved Batches
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
                          <a href="live-classes-res.php" class="btn btn-primary">Register</a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">2
                      </td>
                      <td style="width:130px;">Advance Accounts#November(09 : 20-11 : 35-Daily)
                      </td>
                      <td style="width:250px;">2018-11-16
                      </td>
                      <td style="width:200px;">2019-01-16
                      </td>
                      <td style="width:200px;">09 : 20-11 : 35
                      </td>
                      <td style="width:200px;">13000
                      </td>
                      <td align="center">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                        <form method="POST" action="select-batch">
                          <input type="hidden" name="course" value="CA INTERMEDIATE">
                          <input type="hidden" name="state" value="MAHARASHTRA">
                          <input type="hidden" name="city" value="PUNE">
                          <input type="hidden" name="center" value="136">
                          <input type="hidden" name="batch" id="txtbatchid" value="7732">
                            <a href="live-classes-res.php" class="btn btn-primary">Register</a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">3
                      </td>
                      <td style="width:130px;">EIS#November(11 : 40-01 : 30-Daily)
                      </td>
                      <td style="width:250px;">2018-11-16
                      </td>
                      <td style="width:200px;">2019-01-16
                      </td>
                      <td style="width:200px;">11 : 40-01 : 30
                      </td>
                      <td style="width:200px;">8260
                      </td>
                      <td align="center">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                        <form method="POST" action="select-batch">
                          <input type="hidden" name="course" value="CA INTERMEDIATE">
                          <input type="hidden" name="state" value="MAHARASHTRA">
                          <input type="hidden" name="city" value="PUNE">
                          <input type="hidden" name="center" value="136">
                          <input type="hidden" name="batch" id="txtbatchid" value="7734">
                            <a href="live-classes-res.php" class="btn btn-primary">Register</a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">4
                      </td>
                      <td style="width:130px;">SM#January(11 : 30-01 : 30-Daily)
                      </td>
                      <td style="width:250px;">2019-01-02
                      </td>
                      <td style="width:200px;">2019-03-07
                      </td>
                      <td style="width:200px;">11 : 30-01 : 30
                      </td>
                      <td style="width:200px;">6490
                      </td>
                      <td align="center">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                        <form method="POST" action="select-batch">
                          <input type="hidden" name="course" value="CA INTERMEDIATE">
                          <input type="hidden" name="state" value="MAHARASHTRA">
                          <input type="hidden" name="city" value="PUNE">
                          <input type="hidden" name="center" value="136">
                          <input type="hidden" name="batch" id="txtbatchid" value="7735">
                            <a href="live-classes-res.php" class="btn btn-primary">Register</a>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">5
                      </td>
                      <td style="width:130px;">New Auditing and Assurance#November(02 : 00-04 : 00-Daily)
                      </td>
                      <td style="width:250px;">2018-11-16
                      </td>
                      <td style="width:200px;">2019-01-18
                      </td>
                      <td style="width:200px;">02 : 00-04 : 00
                      </td>
                      <td style="width:200px;">8850
                      </td>
                      <td align="center">
                        <!--<a href="center-details.php?&id=136" target="_blank"><img src="images/page_white_magnify.png">                                 </a>-->
                        <form method="POST" action="select-batch">
                          <input type="hidden" name="course" value="CA INTERMEDIATE">
                          <input type="hidden" name="state" value="MAHARASHTRA">
                          <input type="hidden" name="city" value="PUNE">
                          <input type="hidden" name="center" value="136">
                          <input type="hidden" name="batch" id="txtbatchid" value="7736">
                          <!--  <a href="live-classes-res.php"><input type="" value="Register" name="" class="btn btn-info"></a> -->
                           <a href="live-classes-res.php" class="btn btn-primary">Register</a>
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

