<?php
 print_r($_FILES); die();
 session_start();
 require_once("connection.php");
 if (isset($_POST['submit']))
 {
  
  if(empty($_POST['image']) || empty($_POST['name']) || empty ($_POST['phone']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['category']))
  {
   echo 'please fill in the blank';
  }
  else
  {
   $row['user'] = $_SESSION['user'];
   $user = $row['user'];

   $file_name = $_FILES['file']['name'];
   $file_temp_loc = $_FILES['file']['tmp_name'];
   $file_store = "../web/$file_name";

   move_uploaded_file($file_temp_loc,$file_store);

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
 }else{
   header("location:main.php");
 }
?>
 
