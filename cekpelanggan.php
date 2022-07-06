<?php 
session_start();
require_once('config.php');
include('header.php');
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Check Pelanggan</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Check Pelanggan <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section>
	   <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['hapus'])&& is_numeric($_GET['hapus'])){
            $query="DELETE FROM `order`WHERE `idorder`=".$_GET['hapus'];
            $result=mysqli_query($con,$query);
            if($result==TRUE){
                echo'<div class="alert alert-warning">Order ID'.$_GET['hapus'].'Telah dihapus</di>';
            }
        }
        ?>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            
        <?php
        $no=0;
        $query="SELECT * FROM  `member` WHERE `idmember`";
        $result=mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result)){
            $no++;
            echo'   
            <tr>
            <td>'.$no.'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['email'].'</td>
            <td><a href="https://wa.me/62">'.$row['phone'].'</td>
            <td>'.$row['alamat'].','.$row['kota'].','.$row['provinsi'].'</td>
            <td><a href="?detil='.$row['idmember'].'">Detail<a> | <a href="?hapus='.$row['idmember'].'">hapus</a></td>
            </tr>
            ';
        }
        ?>
        </tbody>
        </table>
        </div>
       </div>
<?php 
include('footer.php');
?>		
