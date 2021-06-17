<?php
 session_start();
 require_once("connection.php");
 if (isset($_POST['submit']))
 {
  if(empty($_POST['user']) || empty ($_POST['email']) || empty($_POST['pass']))
  {
   echo 'please fill in the blank';
  }
  else
  {
   $user = $_POST['user'];
   $row['user'] = $_SESSION['user'];
   $email = $_POST['email'];
   $password = $_POST['pass'];
   
   $query = "INSERT INTO users (user,email,password) VALUES('$user','$email','$password')";
       
   $result = mysqli_query($con,$query);
 
   if($result)
   {
    header("location:ins.php");
   } 
   else
   {
    echo 'please check your query';
   }
  }
 }
 else
 {
  header("location:index.php");
 }
?>
 
