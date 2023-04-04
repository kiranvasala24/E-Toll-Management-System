<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>EToll System | Home</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      .back {
    top: 50%;
    left: 50%;
    display: block;
    position: absolute;
    background-size: 750px 417px;
    width: 750px;
    height: 417px;
    margin-top: -208.5px; /* HALF OF THE HEIGHT */
    margin-left: -375px; /* HALF OF THE WIDTH */
}
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include('include/header.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
             <!--  <span class="count_top"><i class="fa fa-user"></i> Total Purchase</span> -->
              <span class="count_top"><i class="fa fa-user"></i>Total Users</span>
              <div class="count">
                <?php

            if($_SESSION['type'] == "admin"){
              $sel="SELECT COUNT(*) AS totaluser FROM numberplate";
              $qry=dbQuery($sel);
              $res=dbFetchAssoc($qry);
          
         echo "<i class='fa fa-user' aria-hidden='true'></i> ".$res['totaluser'];
            }elseif ($_SESSION['type'] == "user") {
              echo "<i class='fa fa-user' aria-hidden='true'></i> 1";
            }

              
             ?>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-inr"></i> Total Amount Collected</span>
              <div class="count green">

                <?php
                 if($_SESSION['type'] == "admin"){
              
                $qry=dbQuery("SELECT SUM(amount) AS total FROM `tollamount`");   
                $res=dbFetchAssoc($qry);
        echo "<i class='fa fa-inr' aria-hidden='true'></i> ".$res['total'];
            }elseif ($_SESSION['type'] == "user") {
               $qry=dbQuery("SELECT SUM(amount) AS total FROM `tollamount` where user='".$_SESSION['name']."'");   
                $res=dbFetchAssoc($qry);
        echo "<i class='fa fa-inr' aria-hidden='true'></i> ".$res['total'];
            }
          ?>
              </div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <!-- <canvas id="overiewChart" class="demo-placeholder" style="opacity: 0.4;"></canvas> -->
                  <div id="container" style="text-align: center;height: 50vh;">
                    <div class="fa fa-car" style="margin-top: 10%;font-size: 100px;">EToll System</div>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DB Creation
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
        </script> 
    <script type="text/javascript">

    </script>
  
  </body>
</html>
