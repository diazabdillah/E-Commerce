<?php 
    require_once('config.php');
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $email = $_POST['email'];
          $password =$_POST['password'];
          $konfirmasipassword =$_POST['konfirmasipassword'];
          $result = mysqli_query ($con,"insert into user (username,email,password,konfirmasipassword) values('$username','$email','$password','$konfirmasipassword')");
         
          $cek=mysqli_num_rows($result);
 
          if($cek > 0){
            
              header("location:login.php");
          }else{
              header("location:registrasi.php");	
          }
            
        }
         ?>