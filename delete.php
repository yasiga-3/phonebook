<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
  require_once("connection.php");
  if(isset($_GET['Del']))
  {
    $UserID = $_GET['Del'];
    $query = "delete from contacts where User_ID = '".$UserID."'";
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
