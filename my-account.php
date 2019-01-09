<?php
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
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Last Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="billing-info">
                                <label>Email Address</label>
                                <input type="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Telephone</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info">
                                <label>Fax</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="billing-back-btn">
                        <div class="billing-back">
                            <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                        </div>
                        <div class="billing-btn">
                            <button type="submit">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="billing-info">
                            <label>Password</label>
                            <input type="password">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="billing-info">
                            <label>Password Confirm</label>
                            <input type="password">
                        </div>
                    </div>
                </div>
                <div class="billing-back-btn">
                    <div class="billing-back">
                        <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                    </div>
                    <div class="billing-btn">
                        <button type="submit">Continue</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">3. Modify your address</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="billing-information-wrapper">
                <div class="account-info-wrapper">
                    <h4>Address Book Entries</h4>
                </div>
                <div class="entries-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="entries-info text-center">
                                <p>Farhana hayder (shuvo) </p>
                                <p>hastech </p>
                                <p> Road#1 , Block#c </p>
                                <p> Rampura. </p>
                                <p>Dhaka </p>
                                <p>Bangladesh </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="entries-edit-delete text-center">
                                <a class="edit" href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="billing-back-btn">
                    <div class="billing-back">
                        <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                    </div>
                    <div class="billing-btn">
                        <button type="submit">Continue</button>
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