<?php if(!isset($_SESSION['user'])): ?>
<?php else: ?>
<?php endif ?>
<?php
 session_start();
 require_once("connection.php");
 $UserID = $_GET['only'];
 $query = "select * from contacts where User_ID = '".$UserID."'";
 $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>view</title>
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
                        <h4 class="page-title">View</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>    
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <table class="table"border="0">
                 <?php
                   while($row=mysqli_fetch_assoc($result))
                   {
                     $UserName = $row['User_Name'];
                     $UserPhone = $row['User_Phone'];
                     $UserEmail = $row['User_Email'];
                     $UserAge = $row['User_Age'];
                     $Category = $row['Category'];
                 ?> 
                 <tr>
                  <td><h4>Name:<?php echo $UserName ?></h4></td>
                 </tr>
                 <tr>
                  <td><h4>Phone:<?php echo $UserPhone ?></h4></td>
                 </tr>
                 <tr>
                  <td><h4>Email:<?php echo $UserEmail ?></h4></td>
                 </tr>
                 <tr>
                  <td><h4>Age:<?php echo $UserAge ?></h4></td>
                 </tr>
                 <tr>
                  <td><h4>Category:<?php echo $Category ?></h4></td> 
                 </tr>   
                 <?php
                   }   
                 ?>
                </table>
            </div>
        </div> 
    </div>   
    <?php
      require_once("link.php");
    ?>
</body>

</html>
