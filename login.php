<?php 
  session_start();
  require_once"connection.php";
  if(isset($_POST['check'])){
   
     $password = $_POST['pass'];
     $user = $_POST['user'];

     try
     {  
        $SQLQuery = "select * from users where user = '".$user."'";
        $result = mysqli_query($con,$SQLQuery);
        
        while($row=mysqli_fetch_assoc($result))
        {
          $id = $row['id'];
          $user = $row['user'];
          $password = $row['password'];

          if($_SESSION['user'] = $user) {
            $_SESSION['id'] = $id;
            $_SESSION['user'] = $user;
            $_SESSION['check'] = $login;
            header("location:ins.php");
          }
          else{
             echo "Error: Invalid username or password";
          }
        }
     }
     catch(PDOException $e){
      echo"Error: " .$e->getMessage();
     }    
  }
?>
