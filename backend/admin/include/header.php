<?php
session_start();

include "admin_login/admin_session_check.php";
include_once "../database_connection/connection.php";


?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edulounge</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="deshboard.php" class="site_title"><img src="../uploads/logo.png" height="40"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome <h2><?php 
                if (!empty($_SESSION['name'])) {
                  echo $_SESSION['name'];
                }
                ?></h2></span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="deshboard.php"><i class="fa fa-home"></i> Home</span></a>
                  </li>
                  <li><a><i class="fa fa-book"></i> Course <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add_new_course.php">Add New Course</a></li>
                      <li><a href="add_new_batch.php">Add New Batch</a></li>
                      <li><a href="batch_list.php">Batch List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Centers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="center_list.php">Center List</a></li>
                      <li><a href="add_center.php">Add New Center</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-print"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="registered_course.php">Registration List(Unpaid)</a></li>
                      <li><a href="registered_course_paid.php">Registration List(Paid)</a></li>
                      <li><a href="add_center.php">Orders</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-user"></i> Teachers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add_teacher_form.php">Add New Teacher</a></li>
                      <li><a href="teacher_list.php">Teachers List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-picture"></i> Images <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="web_image_list.php">Gallery Images</a></li>
                      <!-- <li><a href="add_popup_image.php">Popup Images</a></li> -->
                      <li><a href="add_image_form.php">Upload Images</a></li>
                    </ul>
                  </li>
                   <li><a><i class="glyphicon glyphicon-facetime-video"></i> Videos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="web_video_list.php">Videos</a></li>
                      <li><a href="add_videos_form.php">Upload Video</a></li>
                    </ul>
                  </li>
                  <li><a href="change_pass.php"><i class="fa fa-lock"></i> Change Password</span></a>
                  </li>
              
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php 
                if (!empty($_SESSION['name'])) {
                  echo $_SESSION['name'];
                }
                ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">5</span>
                        <span>Notification</span>
                      </a>
                    </li>
                    <li><a href="admin_login/admin_logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>View</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->