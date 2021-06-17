<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $UserID = $_GET['GetID'];
 $query = "select * from contacts where User_ID='".$UserID."'";
 $result = mysqli_query($con,$query);

 while($row=mysqli_fetch_assoc($result))
 {
  $UserID = $row['User_ID'];
  $UserName = $row['User_Name'];
  $UserPhone = $row['User_Phone'];
  $UserEmail = $row['User_Email'];
  $UserAge = $row['User_Age'];
  $Category = $row['Category'];
 }

?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Edit</title>
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
                        <h4 class="page-title">Edit</h4> 
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
                <form action="update.php?ID=<?php echo $UserID ?>"method="post">
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Name:</lable>
                  <div class="col-sm-10">
                   <input type="text"class="form-control"placeholder="Enter name"name="name"style="font-size:13px;"value="<?php echo $UserName?>">
                  </div> 
                 </div>
                 <img vspace="20px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Phone:</lable>
                  <div class="col-sm-10">
                   <input type="text"class="form-control"placeholder="Enter phone no"name="phone"style="font-size:13px;"value="<?php echo $UserPhone?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Email:</lable>
                 <div class="col-sm-10">
                  <input type="text"class="form-control"placeholder="Enter email"name="email"style="font-size:13px;"value="<?php echo $UserEmail?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Age:</lable>
                 <div class="col-sm-10">
                  <input type="text"class="form-control"placeholder="Enter age"name="age"style="font-size:13px;"value="<?php echo $UserAge ?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Category:</lable>
                 <div class="col-sm-10">
                  <select class="form-control"name="category"style="font-size:15px;height:40px;">
                   <?php
                      $query = "select ID from category where CATEGORY='school'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                   ?>
                   <option value="<?php echo $id ?>"<?php if($Category=="1"){echo"selected";}?>>school</option>
                   <?php
                      $query = "select ID from category where CATEGORY='neighbour'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                   ?>
                   <option value="<?php echo $id ?>"<?php if($Category=="2"){echo"selected";}?>>neighbour</option>
                   <?php
                      $query = "select ID from category where CATEGORY='office'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                   ?>
                   <option value="<?php echo $id ?>"<?php if($Category=="3"){echo"selected";}?>>office</option>
                   <?php
                      $query = "select ID from category where CATEGORY='college'";
                      $result = mysqli_query($con,$query);

                      while($row=mysqli_fetch_assoc($result))
                      {
                       $id = $row['ID'];
                      }
                   ?>
                   <option value="<?php echo $id ?>"<?php if($Category=="4"){echo"selected";}?>>college</option>
                  </select>
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                  <button name="update"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;">Update</button>
                 </div>
                </div>
               </form>
            </div>
        </div> 
    </div>   
    <?php
      require_once("link.php");
    ?>
</body>

</html>
