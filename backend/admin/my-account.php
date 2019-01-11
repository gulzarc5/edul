<?php
session_start()
if (empty($_SESSION['user_id']) || empty($_SESSION['email'])) {
    header("location:insex.php");
}
include('include/header.php');

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
                                <input type="email" name="email" value="<?php echo $user_row['e_name']?>">
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
                                <input type="text" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text">
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
                                <textarea class="form-control" rows="5" id="">
                                    <?php echo $user_row['about']; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                               <textarea class="form-control" rows="5" id="">
                                   <?php echo $user_row['address']; ?>
                               </textarea>
                            </div>
                        </div>
                        </div>


                    <div class="billing-back-btn">
                       
                        <div class="billing-btn">
                            <button type="submit">Save</button>
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
                            <label>Password</label>
                            <input type="password">
                        </div>
                    </div>

                     <div class="col-md-6"> 
                            <div class="billing-info">
                            <label>Password Confirm</label>
                            <input type="password">
                        </div>
                    </div>
                </div>
                    
                </div>
                <div class=" col-md-12 ">
                <div class="billing-back-btn text-center">
                    <div class="billing-btn" >
                        <button type="submit">Save</button>
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