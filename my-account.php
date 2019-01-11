<?php
session_start();
if(empty($_SESSION['user_id']) || empty($_SESSION['email'])) {
    header("location:index.php");
}
include('include/header.php');

function showState($connection,$state_id = null){
  $sql = "SELECT * FROM `state`";
  if ($res = $connection->query($sql)) {
      while($states = $res->fetch_assoc()){
        if ($states['id'] == $state_id) {
            print '<option value="'.$states['id'].'" selected>'.$states['name'].'</option>';
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
        if ($city == $city_row['city_id']) {
           print '<option  value="'.$city_row['city_id'].'" selected>'.$city_row['name'].'</option>';
        }else{
            print '<option  value="'.$city_row['city_id'].'">'.$city_row['name'].'</option>';
        }
        
      }
    }
  }

?>  

<div class="container-fluid bg-no-overlay">
    <div class="row text-center">
        <h1 style="margin-top: 90px;">My Account</h1>
        <p><span><a href="index.php">Home <i class='fa fa-angle-right'></i></a></span> 
        <span>My Account</span></p>
        
    </div>
</div>
<div class="container" style="margin-top: 40px;">
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <a href="#">1. Edit your account information </a>
        </h4>
      </div>
      <div id="personal_message"></div>
      <div id="collapse1" class="panel-collapse collapse">
        <?php
            $sql_user = "SELECT * FROM `users` WHERE `id`='$_SESSION[user_id]'";
            if ($res_user = $connection->query($sql_user)) {
                $user_row = $res_user->fetch_assoc();
            
        ?>
        <div class="panel-body">
                <div class="billing-information-wrapper">
                    <div class="account-info-wrapper">
                        <h4>My Account Information</h4>
                        <h5>Your Personal Details</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>First Name</label>
                                <input type="text" name="f_name" value="<?php echo $user_row['f_name']?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Last Name</label>
                                <input type="text" name="l_name" value="<?php echo $user_row['l_name']?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="email" name="email" value="<?php echo $user_row['email']?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Telephone</label>
                                <input type="text" name="mobile" value="<?php echo $user_row['mobile']?>">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select id="state_sarch" name="state_id" id="state_sarch">
                                    <option value="" selected>Please Select State</option>

                                    <?php
                                        showState($connection,$user_row['state_id']);
                                    
                                    ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <select name="city" id="city_boxs">
                                    <option value="" selected>Please Select</option>

                                    <?php
                                    if (!empty($user_row['state_id'])) {
                                        showCity($connection,$user_row['state_id'],$user_row['city_id']);
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Pin Code&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="pin" value="<?php echo $user_row['pin']?>">
                            </div>
                        </div>
                         
                    </div>
                      <div class="row">
                    <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <textarea class="form-control" rows="5" id="" name="about">
                                    <?php echo $user_row['about']; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                               <textarea class="form-control" rows="5" id="" name="address">
                                   <?php echo $user_row['address']; ?>
                               </textarea>
                            </div>
                        </div>
                        </div>


                    <div class="billing-back-btn">
                       
                        <div class="billing-btn">
                            <button type="submit" id="personal_save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">2. Change your password</a>
        </h4>
      </div>
      <div id="password_message"></div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="billing-information-wrapper">
                <div class="account-info-wrapper">
                    <h4>Change Password</h4>
                    <h5>Your Password</h5>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-6"> 
                            <div class="billing-info">
                            <label>Current Password</label>
                            <input type="password" name="c_pass">
                        </div>
                    </div>

                     <div class="col-md-6"> 
                            <div class="billing-info">
                            <label>New Password</label>
                            <input type="password" name="new_pass">
                        </div>
                    </div>
                </div>
                    
                </div>
                <div class=" col-md-12 ">
                <div class="billing-back-btn text-center">
                    <div class="billing-btn" >
                        <button type="submit" id="password_save">Save</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>
</div>


      

<?php
include('include/footer.php');
?>

<script src="backend/admin/vendors/jquery/dist/jquery.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script>
    // AJAX call for autocomplet
$j(document).ready(function(){
  var state = null;
    $j("#state_sarch").change(function(){
         state =$j(this).val();
         // alert(state);
        // window.location.href = "live-classes.php?stat="+state+"";
        $.ajax({
        type: "POST",
        url: "backend/admin/ajaxphp/city_fetch.php",
        data:'state='+$(this).val(),
        success: function(data){
            console.log(data);
            // $("#suggesstion-box").show();
            $j("#city_boxs").html(data);
            // $("#trnto").css("background","#FFF");
        }
        });
  });
});



$j(document).ready(function(){

    $j("#personal_save").click(function(){
       var fname = $j('input[name=f_name]').val();
       var lname = $j('input[name=l_name]').val();
       var email = $j('input[name=email]').val();
       var mobile = $j('input[name=mobile]').val();
       var state = $j('#state_sarch').val();
       var city = $j('select[name=city]').val();
       var pin = $j('input[name=pin]').val();
       var about = $j('textarea[name=about]').val();
       var address = $j('textarea[name=address]').val();
        $.ajax({
        type: "POST",
        url: "ajax/update_user_info.php",
        data:{
            fname : fname,
            lname : lname,
            email : email,
            mobile : mobile,
            state : state,
            city : city,
            pin : pin,
            about : about,
            address : address,
        },
        success: function(data){
            console.log(data);
            if (data == 1) {
                window.location.href = "my-account.php";
            }else{
                $j("#personal_message").html("<p class='alert alert-danger'>SOmethin Wrong Please Try Again</p>");
            }
        }
        });
  });
});

$j(document).ready(function(){

    $j("#password_save").click(function(){
       var c_pass = $j('input[name=c_pass]').val();
       var new_pass = $j('input[name=new_pass]').val();
        $.ajax({
        type: "POST",
        url: "ajax/update_user_pass.php",
        data:{
            c_pass : c_pass,
            new_pass : new_pass,
        },
        success: function(data){
            console.log(data);
            if (data == 1) {
                window.location.href = "my-account.php";
            }else{
                $j("#password_message").html("<p class='alert alert-danger'>SOmethin Wrong Please Try Again</p>");
            }
        }
        });
  });
});

</script>