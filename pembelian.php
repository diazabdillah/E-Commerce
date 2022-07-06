<?php
session_start();
if(isset($_GET['beli']) && is_numeric($_GET['beli'])){
require_once('config.php');
include('header.php');
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Pembelian</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pembelian <i class="ion-ios-arrow-forward"></i></span></p>
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
                <th>No Order</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Total Belanja</th>
                <th>No Resi</th>
                <th>status Pembayaran</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            
        <?php
        $no=0;
        $query="SELECT * FROM `order`,`member`WHERE `order`.`idmember`=`member`.`idmember`AND`order`.`idorder`=".$_GET['beli'];
        $result=mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result)){
            $no++;
            echo'   
            <tr>
            <td>'.$no.'</td>
            <td>ABS'.str_pad($row['idorder'],4,0,STR_PAD_LEFT).'</td>
            <td>'.$row['tanggal'].'</td>
            <td>'.$row['nama'].'<br/><a href="https://wa.me/62">'.$row['phone'].'</td>
            <td>'.$row['alamat'].','.$row['kota'].','.$row['provinsi'].'</td>
            <td>Rp.'.number_format($row['totalorder']).'</td>
            <td>'.'';if(isset($row['noresi']) && $row['noresi']!=''){
                echo'dikirim
                <strong>'.$row['noresi'].'</strong>';
                }    
               
                echo'</td>
            <td>'.'';if(isset($row['gambar']) && $row['gambar']!=''){
              echo 'sudah bayar';
            }else{
              echo'belum bayar';
            }
            echo'</td>
                
            <td><a  href="detailpembelian.php?order='.$row['idorder'].'">Bayar<a></td>
            </tr>
            ';
        }
    
        ?>
        </tbody>
        </table>
        </div>
       </div>
       </section>
    <?php }?>
<?php 

include('footer.php');
?>		
