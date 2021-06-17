<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
  require_once("connection.php");
  $row['user'] = $_SESSION['user'];
  $user = $row['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Category</title>
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
          require_once("sidepart.php");
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
                        <h4 class="page-title">Category</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Category</h3>
                            <img vspace="10px"/>
                            <div class="table-responsive">
                                <table class="table">
                                    <?php
                                     $sql = "select ID from category where CATEGORY ='school'";
                                     $execute = mysqli_query($con,$sql);
                                     while($row1=mysqli_fetch_assoc($execute))
                                     {
                                      $id = $row1['ID'];
                                     }
                                     $query = "select * from contacts where User='".$user."' and Category = '$id'";
                                     $result = mysqli_query($con,$query);
                                    ?>
                                    <?php
                                      $sum = 0;
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                       $sum = $sum+1;
                                    ?>
                                    <?php
                                      }   
                                    ?> 
                                     </tr>
                                      <td><a href="catscl.php"><h4>School(<?php echo $sum ?>)</h4></a></td>
                                     </tr> 
                                    <?php
                                      $sql = "select ID from category where CATEGORY ='neighbour'";
                                      $execute = mysqli_query($con,$sql);
                                      while($row1=mysqli_fetch_assoc($execute))
                                      {
                                       $id = $row1['ID'];
                                      }
                                      $query = "select * from contacts where User='".$user."' and Category='$id'";
                                      $result = mysqli_query($con,$query);  
                                    ?>
                                    <?php
                                      $sum = 0;
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                       $sum = $sum+1;
                                    ?>
                                    <?php
                                      }   
                                    ?> 
                                     <tr>
                                      <td><a href="catnei.php"><h4>Neighbour(<?php echo $sum ?>)</h4></a></td>
                                     </tr>
                                    <?php
                                      $sql = "select ID from category where CATEGORY ='office'";
                                      $execute = mysqli_query($con,$sql);
                                      while($row1=mysqli_fetch_assoc($execute))
                                      {
                                       $id = $row1['ID'];
                                      }
                                      $query = "select * from contacts where User='".$user."' and Category = '$id'";
                                      $result = mysqli_query($con,$query);  
                                    ?>
                                    <?php
                                      $sum = 0;
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                       $sum = $sum+1;
                                    ?>
                                    <?php
                                      }   
                                    ?> 
                                     <tr>
                                      <td><a href="catoff.php"><h4>Office(<?php echo $sum ?>)</h4></a></td>
                                     </tr>
                                    <?php
                                      $sql = "select ID from category where CATEGORY ='college'";
                                      $execute = mysqli_query($con,$sql);
                                      while($row1=mysqli_fetch_assoc($execute))
                                      {
                                       $id = $row1['ID'];
                                      }
                                      $query = "select * from contacts where User='".$user."' and Category = '$id'";
                                      $result = mysqli_query($con,$query);  
                                    ?>
                                    <?php
                                      $sum = 0;
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                       $sum = $sum+1;
                                    ?>
                                    <?php
                                      }   
                                    ?> 
                                     <tr>
                                      <td><a href="catclg.php"><h4>College(<?php echo $sum ?>)</h4></a></td>
                                     </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
