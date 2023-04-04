<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DB Creation | User</title>

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
            <div class="col-md-2 col-sm-12 col-xs-3">
                  <button id="addUser" type="button" class="btn btn-success">Add New User</button>
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
                  <h2>User List</h2>
                  <!-- <ul class="nav navbar-right panel_toolbox">
                  </ul> -->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                      </tr>
                    </thead>

                    <tbody>
            <?php $qry=dbQuery("SELECT * FROM tbl_adminuser where is_active=1 ORDER BY admin_id");
            while($res=dbFetchAssoc($qry)){ ?>              
              
              <tr>
                <td><?php echo $res['admin_username']?></td>
                <td><?php echo $res['admin_email']?></td>
                <td><?php echo $res['type']?></td>
                <td><a class="editUser" data-id="<?php echo $res['admin_id'] ?>"><i class="fa fa-edit"></i></a></td>
              
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
        <div class="modal fade bs-example-modal-lg editUser1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label">User Name</label>
                          <input id="userName" class="form-control col-md-7 col-xs-12" name="name" placeholder="Item Name" required="required" type="text">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label">User Email</label>
                          <input id="userEmail" class="form-control col-md-7 col-xs-12" name="email" placeholder="Rate" required="required" type="email">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label">Balance Type</label>
                            <select id="userRole" name="userRole" class="form-control">
                          <option>Select</option> 
                          <option value="admin">Admin</option>
                          <option value="accountant">Accountant</option>
                          </select>
                        </div>
                        </div>
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="submitUser" type="button" class="btn btn-primary">Save changes</button>
                      </div>

                    </div>
                  </div>
                </div>
        <!-- Model Data End -->
        <!-- Model Data -->
        <div class="modal fade bs-example-modal-lg addUser" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Add Item</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label">User Name</label>
                          <input id="adduserName" class="form-control col-md-7 col-xs-12" name="name" placeholder="User Name" required="required" type="text">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label">User Email</label>
                          <input id="adduserEmail" class="form-control col-md-7 col-xs-12" name="email" placeholder="Email" required="required" type="email">
                        </div>
                      </div>
                      <br/>
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label">Username</label>
                          <input id="adduserName1" class="form-control col-md-7 col-xs-12" name="username" placeholder="Username" required="required" type="email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label">Password</label>
                          <input id="adduserPassword" class="form-control col-md-7 col-xs-12" name="password" placeholder="Password" required="required" type="text">
                        </div>
                      </div>
                      <br/>
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label">Balance Type</label>
                            <select id="adduserRole" name="userRole" class="form-control">
                          <option>Select</option> 
                          <option value="admin">Admin</option>
                          <option value="accountant">Accountant</option>
                          </select>
                        </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="submitNewUser" type="button" class="btn btn-primary">Save changes</button>
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
  $('.editUser').click(function(event) {
event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
$.ajax
    ({
      type: "POST",
      url: "lib/getUser.php",
      data: {
        id: $(event.currentTarget).attr('data-id'),
        function: 'edit'
      },
      cache: false,
      success: function(response)
      {
        var name = JSON.parse(response)[0].admin_username;
        var email = JSON.parse(response)[0].admin_email;
        var role = JSON.parse(response)[0].type;
        $('#userName').val(name);
        $('#userEmail').val(email);
        $('#userRole').val(role);
        $('#submitUser').attr('data-id', $('.editUser').attr('data-id'))
        $('.editUser1').modal('show');
      } 
    });
});

  $('#submitUser').click(function(event) {
event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
if($('#userName').val() && $('#userEmail').val()){
$.ajax
    ({
      type: "POST",
      url: "lib/getUser.php",
      data: {
        id: $('#submitUser').attr('data-id'),
        name: $('#userName').val(),
        email: $('#userEmail').val(),
        role: $('#userRole').val(),
        function: 'submit'
      },
      cache: false,
      success: function(response)
      {
        $('.editUser1').modal('hide');
        alert("Data Updated Successfully");
        window.location.href="userProfile.php";
      } 
    });
  }else{
    alert("Empty Value Not Accept");
  }
});

  $('#addUser').click(function(event) {
    event.preventDefault();
    $('.addUser').modal('show');
});

  $('#submitNewUser').click(function(event) {
event.preventDefault();
//this.blur(); // Manually remove focus from clicked link.
if($('#adduserName').val() && $('#adduserEmail').val()){
$.ajax
    ({
      type: "POST",
      url: "lib/getUser.php",
      data: {
        name: $('#adduserName').val(),
        email: $('#adduserEmail').val(),
        username: $('#adduserName1').val(),
        password: $('#adduserPassword').val(),
        role: $('#adduserRole').val(),
        function: 'add'
      },
      cache: false,
      success: function(response)
      {
        $('.addUser').modal('hide');
        alert("Data Updated Successfully");
        window.location.href="userProfile.php";
      } 
    });
  }else{
    alert("Empty Value Not Accept");
  }
});


// } );
  </script>

</body>
</html>