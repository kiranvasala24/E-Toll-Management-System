<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EToll System | Item</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <style type="text/css">

.zoom:hover {
  transform: scale(3.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <?php include('include/header.php');?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="x_title">
              <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-7">
                  <h3>User Information</h3>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-3">
                  <button id="addAmount" type="button" class="btn btn-success addAmountUser">Add Amount</button>
                </div>
              </div>
            </div>
            <!-- <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div> -->
          </div>

          <!-- <div class="clearfix"></div> -->

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>User Information</h2>
                  <!-- <ul class="nav navbar-right panel_toolbox">
                  </ul> -->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-column-sorting" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Licence</th>
                        <th>Car No.</th>
                        <th>Balance Amount</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $qry=dbQuery("SELECT * FROM numberplate where name='".$_SESSION['name']."'");
                      $res=dbFetchAssoc($qry);
                      ?>              

                        <tr>
                          <td><?php echo $res['licence']?></td>
                          <td><?php echo $res['car_no']?></td>
                          <td class="userId" data-id="<?php echo $res['id']?>"><?php echo $res['balance']?></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Model Data -->
        <div class="modal fade bs-example-modal-lg addAmount" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Amount</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" id="addItemForm">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="addAmountValue" class="form-control col-md-7 col-xs-12" name="name" placeholder="Amount" required type="number">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="submitAmount" type="button" class="btn btn-primary">Save changes</button>
              </div>

            </div>
          </div>
        </div>
        <!-- Model Data End -->
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <?php include('include/footer.php');?>
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
            <!-- iCheck -->
            <script src="../vendors/iCheck/icheck.min.js"></script>
            <!-- Datatables -->
            <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
            <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
            <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
            <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
            <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
            <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
            <script src="../vendors/jszip/dist/jszip.min.js"></script>
            <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
            <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

            <!-- Custom Theme Scripts -->
            <!-- <script src="../build/js/custom.min.js"></script> -->
            <script src="../build/js/custom.js"></script>
            <script type="text/javascript">

$('.addAmountUser').click(function(event){
  event.preventDefault();
  $('.addAmount').modal('show');
  $('#submitAmount').attr('data-id', $('.userId').attr('data-id')) 
});

$('#submitAmount').click(function(event){
  event.preventDefault();
  if($('#addAmountValue').val()){
  $.ajax
  ({
    type: "POST",
    url: "lib/addAmount.php",
    data: {
      id: $('#submitAmount').attr('data-id'),
      amount: parseInt($('#addAmountValue').val())
    },
    cache: false,
    success: function(response)
    {
      $('.addAmount').modal('hide');
      alert("Data Updated Successfully");
      window.location.href="balance.php";
    } 
  });
}else{
  alert("Empty Value Not Accept");
}
});

</script>
<script type="text/javascript">
  var table = $('#datatable-column-sorting').DataTable({
          
          "columnDefs": [
    { "width": "30%"}
  ],
          dom: "Blfrtip",
            buttons: [
            // {
            //   extend: "copy",
            //   className: "btn-sm"
            // },
            {
              extend: "csv",
              className: "btn-sm"
            },
            {
              extend: "excel",
              className: "btn-sm"
            },
            {
              extend: "pdfHtml5",
              className: "btn-sm"
            },
            {
              extend: "print",
              className: "btn-sm"
            },
            ],
            responsive: true
        });
</script>

</body>
</html>