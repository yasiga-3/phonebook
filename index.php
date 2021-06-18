<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Phonebook</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <?php
          require_once("logo.php");         
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Log In</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <form action="login.php"method="POST">

                  <div class="form-group">

                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">UserName:</lable>
                   <div class="col-sm-8">
                    <input type="text"class="form-control"placeholder="User"name="user"style="font-size:13px;">
                   </div> 
                  </div><br />
                  <img vspace="30px"/>
                  <div class="form-group">
                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">UserPassword:</lable>
                   <div class="col-sm-8">
                    <input type="password"class="form-control"placeholder="Password"name="pass"style="font-size:13px;">
                   </div> 
                  </div><br />
                  <img vspace="30px"/>
                  <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-8">
                    <button name="check"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"href="login.php">Log In</button>
                   </div>
                  </div>
                 </form>
                 <img vspace="20px"/>
                 <form action="sign.php"method="post">
                  <img hspace="85px"/>
                  <button name="signup"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 16%;font-size:13px;"href="sign.php">SignUp</button>
                 </form>
            </div>
        </div>
    </div>
    <?php
      require_once("link.php");
    ?>    
</body>

</html>    
