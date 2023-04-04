<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EToll System | Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" name="basic_validate" id="loginform">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
               <span class="pull-right"> <input type="submit" class="btn btn-success" value="Login" />
               </span>
                <!-- <a class="btn btn-default submit" >Log in</a> -->
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-car"></i> EToll System</h1>
                  <p>©2019 All Rights Reserved. EToll System</p>
                </div>
              </div>
              <div class="form-actions">
                   <span class="pull-left" style="width: 76%;">
                   <div class="loader" style="display:none;"><img src="images/loader.gif" width="24">Please Wait...</div>
                  <div class="alert alert-error alert-block" style="display:none;"> <a class="close" data-dismiss="alert" href="#">×</a>
                      <i class="icon-ban-circle"></i> Invalid Credentials</div>
                  </span>   
                </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-car"></i> EToll System</h1>
                  <p>©2016 All Rights Reserved. EToll System</p>
                </div>
              </div>
              
            </form>
          </section>
        </div>
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
<script src="../build/js/custom.js"></script>
  <script>
 $("#loginform").submit(function(e) {
  $(".loader").show();
   $.ajax({
    url:'lib/login.php',
    type:'post',
    data:$("#loginform").serialize(),
    success:function(data){
     //alert(data);
    if(data==1)
    { 
      $(".loader").hide();
      $(location).attr('href','home.php');
      }
    else
    {
      $(".loader").hide();
      $(".alert").show();
  setInterval(function() {
      $(".alert").hide();   
          }, 8000);   
      
      } 
    },
    });
    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>
  </body> 
</html>
