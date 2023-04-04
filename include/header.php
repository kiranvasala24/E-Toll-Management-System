<?php
// This code is executed whenever you include this file
session_start(); 
include('./database/db_connection.php');
include("./lib/get_functions.php");
include("./lib/functions.php");

if (empty($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      
          <?php include('include/logo.php');?>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['user']?></h2>
              </div>
            </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home"></i> Home </a>
                  </li>

                  <?php if($_SESSION['type'] == "admin"){ ?>
                  <li><a href="collectToll.php"><i class="fa fa-rupee"></i> Collect Toll </a>
                  </li>
                <?php }?>
                 <?php if($_SESSION['type'] == "admin"){ ?>
                  <li><a href="userinfo.php"><i class="fa fa-user"></i> Users </a>
                  </li>
                <?php }?>
                 <?php if($_SESSION['type'] == "user"){ ?>
                  <li><a href="balance.php"><i class="fa fa-rupee"></i> Balance </a>
                  </li>
                <?php }?>
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
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['user']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
  <!-- /top navigation -->


