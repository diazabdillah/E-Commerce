<?php 

require_once('config.php');
include('header.php');
if (isset($_POST['page']) && isset($_POST['nama']) && isset($_POST['alamat']) && $_POST['page']=='preview' ){
    $nama=mysqli_real_escape_string($con,$_POST['nama']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $alamat=mysqli_real_escape_string($con,$_POST['alamat']);
    $kota=mysqli_real_escape_string($con,$_POST['kota']);
    $provinsi=mysqli_real_escape_string($con,$_POST['provinsi']);
    $item='';
   
    $jumlah=0;
    foreach($_SESSION['cart'] as $key => $value){
        $jumlah = $jumlah + ($produk[$key]['harga']*$value);
        $item.="([idorder],".$key.",".$value."),";
        
        
    }
    $query="INSERT INTO `member`(`nama`,`email`,`phone`,`alamat`,`kota`,`provinsi`) VALUES('$nama','$email','$phone','$alamat','$kota','$provinsi')";
    $insertmember=mysqli_query($con,$query);
    if($insertmember == FALSE){
        $error='Error insert Member'.mysqli_error($con);
    }else{
        $idmember=mysqli_insert_id($con);
        $query="INSERT INTO `order`(`idmember`,`tanggal`,`totalorder`,`status`) VALUES(".$idmember.",NOW(),".$jumlah.",0)";
        $insertorder=mysqli_query($con,$query);
        if($insertorder == FALSE){
            $error='Error insert order:'.mysqli_error($con);
        }else{
            $idorder=mysqli_insert_id($con);
            $item=substr($item,0,-1);
            $item=str_replace('[idorder]',$idorder,$item);
            $query="INSERT INTO `orderitem`(`idorder`,`idproduk`,`jumlah`) VALUES ".$item;
            $insertitem=mysqli_query($con,$query);
        if($insertitem === FALSE){
            $error='Eror Insert Item:'.mysqli_error($con);
        }else{
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

            $sukses='
            <p>Terima kasih atas orderan anda.<br/>
             <strong>No. Order:ABS'.str_pad($idorder,4,0,STR_PAD_LEFT).'</strong></br>
             Silahkan Konfirmasi via wa ke: <a href="https://wa.me/6281331913558?text='.$pesan.'">081331913558</a><br/>
             Silahkan Transfer sebesar<strong> Rp.'.number_format($jumlah).'</strong> <br/> ke
              Bank Mandiri a/n Muhammad Zaid Abdillah a/c 1400019152017</br>
            setelah melakukan pembayaran langsung upload bukti transfer di <a href="pembelian.php?beli='.$idorder.'">Dahsboard</a></p>
            
            ';
            
            
        }
       }
    }
}

?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Checkout</h1>
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
echo '
<h1>Dikirimkan kepada:</h1><br/>
<table class="table">
<tr><td>Nama:</td><td>'.$_POST['nama'].'</td></tr>
<tr><td>Email:</td><td>'.$_POST['email'].'</td></tr>
<tr><td>NoHp:</td><td>'.$_POST['phone'].'</td></tr>
<tr><td>Alamat:</td><td>'.$_POST['alamat'].'</td></tr>
<tr><td>Kota:</td><td>'.$_POST['kota'].'</td></tr>
<tr><td>Provinsi:</td><td>'.$_POST['provinsi'].'</td></tr>

</table>
';

        
?>
            <form action="" method="POST">
                <input name="nama" value="<?php echo $_POST['nama']?>">
                <input type="hidden" name="email" value="<?php echo $_POST['email']?>">
                <input type="hidden" name="phone" value="<?php echo $_POST['phone']?>">
                <input type="hidden" name="alamat" value="<?php echo $_POST['alamat']?>">
                <input type="hidden" name="kota" value="<?php echo $_POST['kota']?>">
                <input type="hidden" name="provinsi" value="<?php echo $_POST['provinsi']?>">
                <input type="hidden" name="page" value="preview">
                <input type="submit" value="ORDER SEKARANG" class="btn btn-primary">
            </form>
            <?php 
        endif;
        }
        ?>
        </div>
    </div>
</section>
<br>

<?php 
include('footer.php');
?>