
<?php
require_once('config.php');
session_start();
unset($_SESSION['login']);
session_destroy();
header("Location:login.php");
?>