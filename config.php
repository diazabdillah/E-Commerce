<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="bisnisanekabarang";
$con=mysqli_connect("localhost","root","","bisnisanekabarang");
if($con === FALSE){
  echo mysqli_connect_error($con);

}
?>