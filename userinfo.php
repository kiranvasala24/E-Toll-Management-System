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
                  <h3>Users</h3>
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
                  <h2>Users List</h2>
                  <!-- <ul class="nav navbar-right panel_toolbox">
                  </ul> -->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-column-sorting" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Licence</th>
                        <th>Car No.</th>
                        <th>Balance</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $qry=dbQuery("SELECT * FROM numberplate ORDER BY timestamp");
                      while($res=dbFetchAssoc($qry)){ ?>              

                        <tr>
                          <td><?php echo $res['name']?></td>
                          <td><?php echo $res['licence']?></td>
                          <td><?php echo $res['car_no']?></td>
                          <td><?php echo $res['balance']?></td>
                          <!-- <td><?php echo $res['timestamp']?></td> -->
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Model Data -->
        <div class="modal fade bs-example-modal-lg editItem1" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="itemName" class="form-control col-md-7 col-xs-12" name="name" placeholder="Item Name" required="required" type="text">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="itemRate" class="form-control col-md-7 col-xs-12" name="rate" placeholder="Rate" required="required" type="number">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <input id="itemName" class="form-control col-md-7 col-xs-12" name="name" placeholder="Item Name" required="required" type="text">
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="submitItem" type="button" class="btn btn-primary">Save changes</button>
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
    // $(document).ready(function() {
      $('.editItem').click(function(event) {
        event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
$.ajax
({
  type: "POST",
  url: "lib/getItem.php",
  data: {
    id: $(event.currentTarget).attr('data-id'),
    function: 'edit'
  },
  cache: false,
  success: function(response)
  {
    var name = JSON.parse(response)[0].name;
    var rate = JSON.parse(response)[0].rate;
    $('#itemName').val(name);
    $('#itemRate').val(rate);
    $('#submitItem').attr('data-id', $('.editItem').attr('data-id'))
    $('.editItem1').modal('show');
  } 
});
});

      $('#submitItem').click(function(event) {
        event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
if($('#itemName').val() && $('#itemRate').val()){
  $.ajax
  ({
    type: "POST",
    url: "lib/getItem.php",
    data: {
      id: $('#submitItem').attr('data-id'),
      name: $('#itemName').val(),
      rate: $('#itemRate').val(),
      function: 'submit'
    },
    cache: false,
    success: function(response)
    {
      $('.editItem1').modal('hide');
      alert("Data Updated Successfully");
      window.location.href="items.php";
    } 
  });
}else{
  alert("Empty Value Not Accept");
}
});

      $('#addItem').click(function(event) {
        event.preventDefault();
        $('.addItem').modal('show');
      });

      $('#submitNewItem').click(function(event) {
        event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
if($('#additemName').val() && $('#additemRate').val()){
  var additemName = $("#additemName").val();
    var additemRate = $("#additemRate").val();
    var additemImage = $("#additemImage").prop('files')[0];

    //Your Formdata Ready To Send
    var data = new FormData();
    data.append('image', additemImage);
    data.append('name', additemName);
    data.append('rate', additemRate);
    data.append('function', 'add');
  $.ajax
  ({
    type: "POST",
    url: "lib/getItem.php",
    data: data,
    contentType: false,
    cache: false,
    processData:false,
    success: function(response)
    {
      $('.addItem').modal('hide');
      alert("Data Updated Successfully");
      window.location.href="items.php";
    } 
  });
}else{
  alert("Empty Value Not Accept");
}
});

      // $('.viewStock').click(function(event) {
      //   event.preventDefault();
      //   $.ajax
      //   ({
      //     type: "POST",
      //     url: "lib/getItem.php",
      //     data: {
      //       id: $(event.currentTarget).attr('data-id'),
      //       function: 'viewStock'
      //     },
      //     cache: false,
      //     success: function(response)
      //     {
      //       $('.viewStock1').modal('show');
      //       $('.particularName').text(JSON.parse(response)[0].name);
      //       $('.in_stock').text(JSON.parse(response)[0].in_stock);
      //       $('.out_stock').text(JSON.parse(response)[0].out_stock);
      //     } 
      //   });
      // });


// } );

$('.uploadImage').click(function(event){
  event.preventDefault();
  $('.addUploadImage').modal('show'); 
  $('#imageName').val($(event.currentTarget).attr('data-id')+'_'+$(event.currentTarget).attr('data-name')); 
  $('#itemID').val($(event.currentTarget).attr('data-id'));
});

$('.editItemImage').click(function(event){
  event.preventDefault();
  $('.editItemImage1').modal('show'); 
  $('#editImageName').val($(event.currentTarget).attr('data-id')+'_'+$(event.currentTarget).attr('data-name')); 
  $('#editItemID').val($(event.currentTarget).attr('data-id'));
});

</script>
<script>
function validateEditImage() {
  var img = $("#edititemImage").val();
 
  var exts = ['jpg','jpeg','png','gif', 'bmp'];
  // split file name at dot
  var get_ext = img.split('.');
  // reverse name to check extension
  get_ext = get_ext.reverse();
 
  if (img.length > 0 ) {
    if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
      return true;
    } else {
       alert("Upload only jpg, jpeg, png, gif, bmp images");
      return false;
    }     
  } else {
    alert("please upload an image");
    return false;
  }
  return false;
}
function validateImage() {
  var img = $("#additemImage").val();
 
  var exts = ['jpg','jpeg','png','gif', 'bmp'];
  // split file name at dot
  var get_ext = img.split('.');
  // reverse name to check extension
  get_ext = get_ext.reverse();
 
  if (img.length > 0 ) {
    if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
      return true;
    } else {
       alert("Upload only jpg, jpeg, png, gif, bmp images");
      return false;
    }     
  } else {
    alert("please upload an image");
    return false;
  }
  return false;
}
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