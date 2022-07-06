<?php
require_once('koneksi.php');
include('header.php');
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Keranjang</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Checkout <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row d-flex ">
            <?php 
  if(isset($sukses)){
  echo $sukses;
  }elseif(isset($error)){
   echo $error;
  }else{
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0):
echo '
<h1>Daftar Belanja</h1>
<table class="table">
<thead>
<tr><th>Nama Produk</th>
<th>Jumlah</th>
<th>Harga</th>
<th>Action</th>
</tr>
</thead>
<tbody>';
$jumlah=0;
if (isset($_GET['beli']) && is_numeric($_GET['beli'])){
if (isset($_SESSION['cart'][$_GET['beli']])){
  $_SESSION['cart'][ $_GET['beli'] ]++;

}else{
  $_SESSION['cart'][$_GET['beli']]=1;

}
}elseif(isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])){
if (isset($_SESSION['cart'][$_GET['kurangi']])){
$_SESSION['cart'][ $_GET['kurangi'] ]--;

}
}elseif(isset($_GET['hapus']) && is_numeric($_GET['hapus'])){
if (isset($_SESSION['cart'][$_GET['hapus']])){
unset($_SESSION['cart'][ $_GET['hapus']]);

}
}elseif(isset($_GET['tambah']) && is_numeric($_GET['tambah'])){
if (isset($_SESSION['cart'][$_GET['tambah']])){
$_SESSION['cart'][ $_GET['tambah']]++;

}
}

foreach ($_SESSION['cart'] as $key => $value) {
echo '<tr>
<td>'.$produk[$key]['gambar'].'
'.$produk[$key]['namaproduk'].

'</td>
<td>'.$value.'</td>
<td>Rp.'.number_format($produk[$key]['harga']*$value).'</td>

<td> 
<a href="?kurangi='.$key.'" data-toggle="tooltip" tittle="kurangi">&#9940</a>
<a href="?tambah='.$key.'" data-toggle="tooltip" tittle="tambah">&#10133</a>
<a href="?hapus='.$key.'" data-toggle="tooltip" tittle="hapus">&#10060</a>
</td>
</tr>
</tbody>
'; 

$jumlah=$jumlah+($produk[$key]['harga']*$value);

}

echo '
<tr>
<td colspan="2" class="text-right">Subtotal</td><td>Rp.'.number_format($jumlah).'</td>
</tr>
<tr>
<td colspan="2" class="text-right">Ongkos Kirim</td><td>Rp.'.number_format($jumlah).'</td>
</tr>
<tr>
<td colspan="2" class="text-right">Biaya Admin</td><td>Rp.'.number_format($jumlah).'</td>
</tr>
<tr>
<td colspan="2" class="text-right">Total</td><td><strong>Rp.'.number_format($jumlah).'</strong></td>
</tr>

</table>';
endif;
}
include('header.php');
?>