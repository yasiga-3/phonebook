<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 if(isset($_POST['update']))
 {
  $UserID = $_GET['ID'];
  $UserName = $_POST['name'];
  $UserPhone = $_POST['phone'];
  $UserEmail = $_POST['email'];
  $UserAge = $_POST['age'];
  $Category = $_POST['category'];

  $query = "update contacts set User_Name = '".$UserName."',User_Phone = '".$UserPhone."',User_Email = '".$UserEmail."',User_Age = '".  $UserAge."',Category = '".$Category."'where User_ID = '".$UserID."'";
  $result = mysqli_query($con,$query);
 
  if($result)
  {
   header("location:view.php");
  }
  else
  {
   echo 'please check your query';
  }
 }
 else
 {
  header("location:view.php");
 }

?>
