<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
 session_start();
 require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      require_once("head.php");
    ?>
    <title>Add</title>
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
                        <h4 class="page-title">Add</h4> 
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
                <form action="insert.php" method="post" enctype="multipart/form-date">
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Profile:</lable>
                  <div class="col-sm-8">
                   <input type="file" name="image" class="form-control"style="font-size:13px;"/>
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Name:</lable>
                  <div class="col-sm-8">
                   <input type="text"class="form-control"placeholder="Enter name"name="name"style="font-size:13px;">
                  </div> 
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Phone:</lable>
                  <div class="col-sm-8">
                   <input type="text"class="form-control"placeholder="Enter phone no"name="phone"style="font-size:13px;">
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Email:</lable>
                  <div class="col-sm-8">
                   <input type="email"class="form-control"placeholder="Enter email"name="email"style="font-size:13px;">
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Age:</lable>
                  <div class="col-sm-8">
                   <input type="number"class="form-control"placeholder="Enter age"name="age"style="font-size:13px;">
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <label type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Category:</label>
                  <div class="col-sm-8">
                   <select type="text"class="form-control"name="category"style="font-weight:500;font-size:13px;">
                    <option value="">select category</option>
                    <?php
                      $query = "select ID from category where CATEGORY='school'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                    ?>
                    <option value="<?php echo $id ?>">school</option>
                    <?php
                      $query = "select ID from category where CATEGORY='neighbour'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                    ?>
                    <option value="<?php echo $id ?>">neighbour</option>
                    <?php
                      $query = "select ID from category where CATEGORY='office'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                    ?>
                    <option value="<?php echo $id ?>">office</option>
                    <?php
                      $query = "select ID from category where CATEGORY='college'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                    ?>
                    <option value="<?php echo $id ?>">college</option>
                   </select>
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                   <input type="submit"name="submit"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;">
                  </div>
                 </div>
                </form>
            </div>
        </div> 
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
