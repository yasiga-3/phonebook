<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
?>
<?php
  if(isset($_POST['upload'])){
    if(empty($_POST['image']) || empty($_POST['name']) || empty ($_POST['phone']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['category']))
    {
    echo 'please fill in the blank';
    }
    else
    {

     $file_name = $_FILES['file']['name'];
     $file_temp_loc = $_FILES['file']['tmp_name'];
     $file_store = "../web/$file_name";
  

     move_uploaded_file($file_temp_loc,$file_store);

     $row['user'] = $_SESSION['user'];
     $user = $row['user'];
 
     $UserName = $_POST['name']; 
     $UserPhone = $_POST['phone'];
     $UserEmail = $_POST['email'];
     $UserAge = $_POST['age'];
     $Category = $_POST['category'];

     $query = "insert into contacts(User,User_Img,User_Name,User_Phone,User_Email,User_Age,Category) values('$user','$file_store','$UserName','$UserPhone','$UserEmail','$UserAge','$Category')";
     $result = mysqli_query($con,$query);

     if($result)
     {
      header("location:view.php");
     } 
     else
     {
      echo "please fill in the blank";
     }  
    }
  }
?>
<html>
<head>
 <?php
   require_once("head.php");
 ?>
 <title>Add</title>
</head>
<body class="fix-header">
 <div class="preloader">
     <svg class="circular" viewBox="25 25 50 50">
         <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
     </svg>
 </div>
 <div id="wrapper">
        <?php
          require_once("logo.php");
          require_once("sidepart.php");
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add</h4> 
                    </div>
                </div>
                <form action="?" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Profile:</lable>
                     <div class="col-sm-8">
                       <input type="file" name="file" class="form-control" style="font-size:13px;"/>
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
                       <input type="text" class="form-control" placeholder="Enter phone no"name="phone"style="font-size:13px;"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Email:</lable>
                     <div class="col-sm-8">
                       <input type="email"placeholder="Enter email"name="email"class="form-control"style="font-size:13px;"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Age:</lable>
                     <div class="col-sm-8">
                       <input type="number"class="form-control"style="font-size:13px;"placeholder="Enter age"name="age"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <label type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Category:</label>
                     <div class="col-sm-8">
                       <select type="text" class="form-control" name="category" style="font-weight:500;font-size:13px;">
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
                   <input type="submit"name="upload"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"/>
                  </div>
                 </div> 
                </form>
            </div>
        </div> 
    </div>   
    <?php
      require_once("viewlink.php");
    ?>
</body>
</html>
