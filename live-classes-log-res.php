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

 <div class="container" style="margin-top: 70px;">
  <div class="panel panel-default">
    <div class="panel-heading"><h5>Complete Online Admission Form In Quick 4 Steps!!!</h5></div>
    <div class="panel-body">
       <div class="row text-center"> 
          <div class="col-md-12">
            <!--<h5 class="title-content">STEP 1 : Select Course</h5>-->
            <h5 class="title-content">User Authentication</h5>
            
          </div>
       </div>
       
       <div class="row text-center mrgtp" style="margin-top: 30px;">
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 mrgtp1 col-md-offset-2">
             <form method="post" action="index_stud?lg=login">
               <h6>If you are already Registered with us click here to</h6>
               <br>
              <input type="hidden" name="course" value="CA INTERMEDIATE">
             <input type="hidden" name="state" value="MAHARASHTRA">
             <input type="hidden" name="city" value="PUNE">
             <input type="hidden" name="center" value="136">
             <input type="hidden" name="batch" id="txtbatchid" value="7731">
              <a href="live-classes-login.php" class="btn btn-primary">Login</a>
             </form>
              
          </div>
          
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6 mrgtp1">
             <form method="post" action="new-admission-registration">
               <h6> Click here to Register with your details</h6>
               <br>
              <input type="hidden" name="course" value="CA INTERMEDIATE">
             <input type="hidden" name="state" value="MAHARASHTRA">
             <input type="hidden" name="city" value="PUNE">
             <input type="hidden" name="center" value="136">
             <input type="hidden" name="batch" id="txtbatchid" value="7731">
               <!-- <input type="submit" name="btnregister" class="btn btn-info" value="Register"> -->
               <a href="live-classes-register.php" class="btn btn-primary">Register</a>
             </form>
              
          </div>
          
          
          
       </div>
       <br>
        
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








