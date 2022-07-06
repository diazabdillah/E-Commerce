<?php 
session_start();
if(isset($_GET['order']) && is_numeric($_GET['order'])){
require_once('config.php');
include('header.php');
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">DetailOrder</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span><span><a href="cekorder.php"> CheckOrder</a><i class="ion-ios-arrow-forward"></i></span> <span>Detail Order<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section>
	   <div class="container">
        <div class="row">
    <?php 
    $query="SELECT * FROM  `order`,`member` WHERE `order`.`idmember`=`member`.`idmember`AND`order`.`idorder`=".$_GET['order'];
    $data=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($data);
    if(isset($row['idorder'])&& is_numeric($row['idorder'])){
    
        
    if(isset($_POST['resi']) && $_POST['resi']!=''){
        $resi=mysqli_real_escape_string($con,$_POST['resi']);
        $query="UPDATE `order` SET `noresi`='".$resi."' WHERE `idorder`=".$row['idorder'];
        $data=mysqli_query($con,$query);
    if($data === FALSE){
        echo'<div class="alert alert-warning">DATABASE ERROR:'.mysqli_error($con).'</div>';
    }else{
        echo'<div class="alert alert-warning">Resi telah diperbarui</div>';
    }
    }
    
    echo'
    <p><strong>No Order:ABS'.str_pad($row['idorder'],4,0,STR_PAD_LEFT).'</strong><br/>
    Nama: '.$row['nama'].'<br/>
    Alamat: '.$row['alamat'].','.$row['kota'].','.$row['provinsi'].'<br/>
    No HP: '.$row['phone'].'<br/></p>
    ';
    $query="SELECT * FROM  `orderitem` WHERE `iditem`=".$_GET['order'];
    $data=mysqli_query($con,$query);

    echo '<table class="table" style="width: 100%;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>jumlah</th>
            <th>Harga</th>
            
        </tr>
    ';
    $no=1;
    $subtotal=0;
    $total=0;
    while($item = mysqli_fetch_assoc($data)){
        $subtotal=$produk[$item['idproduk']]['harga'] * $item['jumlah'];
        echo'   
        <tr>
        <td>'.$no.'</td>
        <td>'.$produk[$item['idproduk']]['namaproduk'].'</td>
        <td>'.$item['jumlah'].'</td>
        <td>Rp.'.number_format($subtotal).'</td>
        </tr>
        ';
        $total=$total+$subtotal;
    }
    echo'
    <td colspan="3" class="text-right">Total</td>
    <td>Rp.'.number_format($total).'</td>
    
    </thead>
    </table>
    ';
}
if(isset($row['noresi']) && $row['noresi']!=''){
echo'<p><strong>No.Resi</strong>'.$row['noresi'].'</p>';
}else{
    ?>
    
    <form action="" method="POST">
        <div class="form-group row pr-3">
        <label class="col-sm-5 col-form-label">No. Resi</label>
        <input type="text" name="resi" class="form-control col-sm-6" placeholder="Masukan nomer resi pelanggan">    
    </div>
    <input type="submit" value="Update Resi" class="btn btn-primary">
    </form>
<?php }?>  
    </div>
       </div>
<br>
<?php 
include('footer.php');
?>		
<?php }?>