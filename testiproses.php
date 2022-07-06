<?php
require_once('config.php');
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $testimoni = $_POST['testimoni'];
    $gambar = $_POST['gambar'];

    $result = mysqli_query($con, "insert into testi (nama,email,testimoni,gambar) values('$nama','$email','$testimoni','$gambar')");

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {

        header("location:index.php");
    } else {
        header("location:contact.php");
    }
}