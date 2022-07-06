<?php
$pesan='
    Assalamualaikum ..
    Saya ingin membeli Produk Anda:
    [daftarbelanja]
    kirimkan kepada:
    Nama :'.$_POST['nama'].'
    Email :'.$_POST['email'].'
    No hp :'.$_POST['phone'].'
    Alamat :'.$_POST['alamat'].'
    Kota :'.$_POST['kota'].'
    Provinsi :'.$_POST['provinsi'].'
  
    Terima Kasih.
    ';
    
    $belanja='';
    $jumlah=0;
    foreach ($_SESSION['cart'] as $key => $value) {
      $belanja .='
    -'.$produk[$key]['namaproduk'].' Sebanyak :'.$value;
    $jumlah=$jumlah + ($produk[$key]['harga']*$value);
}
  $belanja.='
  TOTAL:'.number_format($jumlah);  
 
  $pesan=str_replace('[daftarbelanja]', $belanja , $pesan);
  $url='https://wa.me/6281331913558?text='.rawurlencode($pesan);
  //unset($_SESSION['cart']);
  //header('location:'.$url);
  ?>