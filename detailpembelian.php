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
            <h1 class="mb-2 bread">Detail Pembelian</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="pembelian.php">Pembelian<i class="ion-ios-arrow-forward"></i></a></span><span><a href="cekorder.php"> DetailPembelian</a><i class="ion-ios-arrow-forward"></i></span></p>
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

    ?>
    
    <form action="pembelian.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row pr-3">
        <label class="col-sm-5 col-form-label">Upload Bukti Transfer:</label>
        <input type="file" name="gambar" class="form-control col-sm-6" >    
    </div>
    <input type="submit" name="upload" value="Upload pembayaran" class="btn btn-primary">
    </form>

    </div>
       </div>
<br>
<?php 
include('footer.php');
		require_once('config.php');
        include('header.php');
		if(isset($_POST['upload']))
		{
            
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];
    
    $folder = "file/";
    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($con, "insert into tb_gambar (gambar,tipe_gambar,ukuran_gambar) values ('$name','$type','$size')");
        header('location:pembelian.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>		
