<?php 
    require_once('config.php');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
          $password =$_POST['password'];
          
          $result = mysqli_query($con,"select * from user where email='$email' and password='$password'");
         
          $cek=mysqli_num_rows($result);
 
          if($cek > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
              header("location:index.php");
          }else{
              header("location:login.php");	
          }
            
        }
         ?>