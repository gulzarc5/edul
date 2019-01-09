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
            <h5 class="title-content">STEP 4 : Admission Form</h5>
            <h5 class="title-content">Batch Details </h5>
            
          </div>
       </div>
       
       <div class="panel-body text-center">
    <form method="POST" name="frmbatch" action="" class="form-horizontal">


           

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
            <table class="table table-striped" style="margin-top: 20px;">
          <tbody>
            <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name:*</label>
                          <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Mobile:*</label>
                           <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Mobile Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Selected City:*</label>
                           <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Selected City" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Fee:*</label>
                           <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1:*</label>
                              <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                             </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">City:*</label>
                            <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Pincode:*</label>
                            <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">I Accept terms & Condition:*</label>
                            <div class="col-md-8">
                              <label style="margin-left: -214px;"><input type="checkbox" value="">Privacy Policy</label>
                             </div>
                         </div>
                      </fieldset>
                   </form>
                </td>
                <td colspan="1">
                   <form class="form-horizontal">
                      <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email:*</label>
                            <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Email" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Selected Course:*</label>
                           <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Selected Center:*</label>
                          <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">ICAI Registration No:*</label>
                            <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line2:*</label>
                            <div class="col-md-8">
                               <textarea class="form-control" rows="5" id="comment"></textarea>
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">state*</label>
                            <div class="col-md-8">
                               <select class="form-control" id="sel1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                </select>
                             </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Total Pay:*</label>
                            <div class="col-md-8">
                               <input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                             </div>
                         </div>

                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
        <div class="form-group register-btn">
            <submit class="btn btn-primary btn-lg">I Aggree,Pay Now</submit>
          </div>
     </form>
       </div>
        
       </div>
    </div>
  </div>



<?php
include('include/footer.php');
?>


	<script type="text/javascript">
    $(document).ready(function() {
        /*document.getElementById("mnuaboutus").classList.add('mnubrder');*/
        document.getElementById("mnucenters").className = "mnubrder";
    });   
    </script>
  
