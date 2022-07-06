<?php 
require_once('config.php');


if($_SESSION['status'] !="login"){
	header("location:login.php");
}else{
$page='index';
include('header.php');

?>
<section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center"
                data-scrollax-parent="true">
                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <h1><?php echo "Selamat datang cok". $_SESSION["username"]; ?>,</h1>
                    <span class="subheading">Di Aneka Barang Sby</span>

                </div>

            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center"
                data-scrollax-parent="true">

                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Aneka Barang Sby</span>
                    <h1 class="mb-4">Best FrozenFood</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center"
                data-scrollax-parent="true">
                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Aneka Barang Sby</span>
                    <h1 class="mb-4">Tasty Frozenfood</h1>
                </div>

            </div>
        </div>
    </div>


    <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center"
                data-scrollax-parent="true">
                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Aneka Barang Sby</span>
                    <h1 class="mb-4">Halal Frozenfood</h1>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="featured">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url(images/minaku.png);"></div>
                                <div class="text text-center">
                                    <h3>Minaku</h3>
                                    <p><span>Bola ikan</span>, <span>Bola Udang</span>, <span>Bola Lobster</span>,
                                        <span>Bola Salmon</span>, <span>Scallop</span>,<span>Siomay Ikan</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url(images/champ.png);"></div>
                                <div class="text text-center">
                                    <h3>Champ</h3>
                                    <p><span>Sosis Ayam & Sapi</span>, <span>Naget Ayam</span>, <span>Burger Daging
                                            Ayam</span>, <span>Bakso</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url(images/belfoods.jpg);"></div>
                                <div class="text text-center">
                                    <h3>Belfoods</h3>
                                    <p><span>Naget Ayam</span>, <span>Sosis Ayam & Sapi</span>, <span>Royal Golden
                                            Fillet</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="featured-menus ftco-animate">
                                <div class="menu-img img" style="background-image: url(images/bernardi.png);"></div>
                                <div class="text text-center">
                                    <h3>Bernardi</h3>
                                    <p><span>Sosis Ayam & Sapi</span>, <span>Bakso Sapi</span>, <span>Roti Burger</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                <div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section text-center mb-4 my-5 my-md-0">
                    <span class="subheading">About</span>
                    <h2 class="mb-4">Tentang&nbsp;Toko</h2>
                </div>
                <p>Assalamualaikum.wr.wb.<br>

                    Toko kami menjual Barang Makanan,Minuman,Jajan &amp; pakaian. <br>
                    Semua barang ready Dan Halal. <br>

                    Terima reseller dan dropshiper.<br>

                    Pelayanan Senin-Minggu jam 8.00 sampai jam 21.00 ( diatas jam tersebut slow respon) <br>

                    Pembayaran Mandiri 14000<br>

                    Pengiriman melalui Jnt &amp; Jne<br>

                    Selamat Berbelanja Di Toko Kami.<br>

                    Terima kasih.<br>
                    wassalamualaikum.wr.wb.</p>
                <p class="time">
                    <span>Monday - Friday <strong>8:00 AM - 21:00 PM</strong></span>
                    <span><a href="#">+628131913558</a></span>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-12">
                <div class="row d-md-flex align-items-center">

                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <?php 
                $query =mysqli_query($con,"SELECT*FROM barang ORDER BY id ASC");
				        $row_kat=mysqli_num_rows($query);
				?>
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="<?php echo $row_kat?>"></strong>
                                <span><strong>Produk</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <?php 
                $query =mysqli_query($con,"SELECT*FROM orderitem  ORDER BY idorder ASC");
				        $order=mysqli_num_rows($query);
				?>
                                <strong class="number" data-number="<?php echo $order?>"></strong>
                                <span><strong>Penjualan</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <?php 
                $query =mysqli_query($con,"SELECT*FROM member WHERE idmember");
				        $jumlah=mysqli_num_rows($query);
				?>
                                <strong class="number" data-number="<?php echo $jumlah?>"></strong>
                                <span><strong>Pengunjung</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="15000">0</strong>
                                <span><strong>Komentar</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="text-center heading-section col-md-12 ftco-animate">
                <span class="subheading">How To Order</span>
                <h2 class="mb-4">Cara&nbsp;pesan</h2>
            </div>
        </div> <br>
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <h3 class="heading">Langkah 1:</h3>
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img src="images/user.png" width="50px"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Registrasi &amp; Login</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <h3 class="heading">Langkah 2:</h3>
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img src="images/bag.png" width="50px"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pemesanan Barang</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <h4 class="heading">Langkah 3:</h4>

                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img src="images/bag.png" width="50px"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pembayaran Barang</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <h3 class="heading">Langkah 4:</h3>
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img src="images/bag.png" width="50px"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pengiriman Barang</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <h3 class="heading">Langkah 5:</h3>
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span><img src="images/pay.png" width="50px"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Penilaian &amp; Komentar Pembeli </h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">

        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Discount</span>
                <h2 class="mb-4">Potongan&nbsp;Harga</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>

            </div>
        </div>

        <div class="row no-gutters d-flex align-items-stretch">
            <?php 
        $query =mysqli_query($con,"SELECT * FROM kategori INNER JOIN barang ON kategori.id=barang.idbarang AND barang.id=1");
        if (mysqli_num_rows($query)){
          while($row_kat = mysqli_fetch_array($query)){
        ?>

            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">

                <div class="menus d-sm-flex ftco-animate align-items-stretch">

                    <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                    <div class="text d-flex align-items-center">
                        <div>
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3><?php echo $row_kat["nama"] ?></h3>
                                </div>
                                <div class="one-forth">
                                    <small> <s class="text-secondary">$29</s></small>
                                    <span class="price">Rp.<?php echo $row_kat["harga"] ?></span>
                                </div>
                            </div>
                            <p> <span><?php echo $row_kat["deskripsi"] ?></span></p>

                            <a href="?beli=<?php echo $row_kat["idbarang"] ?>" class="btn btn-primary"><i
                                    class="fas fa-shopping-cart"></i> Add To Chart</a>
                        </div>
                    </div>

                </div>
            </div>
            <?php
          }
        }
        
        ?>

        </div>
    </div>

</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">New Product</span>
                <h2 class="mb-4">Produk&nbsp;Baru</h2>
            </div>
        </div>

        <div class="row no-gutters d-flex align-items-stretch">
            <?php 
        $query =mysqli_query($con,"SELECT * FROM kategori INNER JOIN barang ON kategori.id=barang.idbarang AND barang.id=1");
        if (mysqli_num_rows($query)){
          while($row_kat = mysqli_fetch_array($query)){
        ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/chef-4.jpg);"></div>
                    <div class="text pt-2">
                        <div class="d-flex text align-items-center">
                            <div class="one-forth">
                                <h3><?php echo $row_kat["nama"] ?></h3>

                            </div>
                            <div class="one-forth">
                                <span class="price">Rp.<?php echo $row_kat["harga"] ?></span>
                            </div>
                        </div>
                        <span class="position mb-2"><?php echo $row_kat["deskripsi"] ?></span>
                        <div class="faded">
                            <ul class="ftco-social">
                                <li><a href="?beli=<?php echo $row_kat["idbarang"] ?>" class="btn btn-primary mb-2"
                                        type="submit"><i class="fas fa-shopping-cart"></i>&nbsp;Add To Chart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
          }
        }
      ?>
        </div>
    </div>

</section>

<section class="ftco-section img" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">

        <div class="row d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center">
                    <span class="subheading">Booking</span>
                    <h2 class="mb-4">Pemesanan</h2>
                </div>
                <h1>Keranjang Belanja</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 


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
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
;
$jumlah=0;

foreach ($_SESSION['cart'] as $key => $value) {
    echo '<tr><td>'.$produk[$key]['namaproduk'].'</td>
    <td>'.$value.'</td>
    <td>Rp.'.number_format($produk[$key]['harga']*$value).'</td>
    <td>
    <a href="?kurangi='.$key.'" data-toggle="tooltip" tittle="kurangi">&#9940</a>
    <a href="?tambah='.$key.'" data-toggle="tooltip" tittle="tambah">&#10133</a>
    <a href="?hapus='.$key.'" data-toggle="tooltip" tittle="hapus">&#10060</a>
    </td>
    
    </tr>';
    $jumlah=$jumlah+($produk[$key]['harga']*$value);

}
echo '
<tr><td colspan="2" class="text-right">Jumlah</td><td>Rp.'.number_format($jumlah).'</td></tr>
';
}
?>
                    </tbody>
                </table><br>
                <h1 class="mb-4">Form Pembelian</h1>
                <form action="checkout.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><img src="images/profile.png" width="30px" alt="">&nbsp;Nama</label>
                                <input type="nama" name="nama" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><img src="images/email.png" width="30px">&nbsp;Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><img src="images/contact.png" width="30px">&nbsp;Phone</label>
                                <input type="nohp" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><img src="images/house.png" width="35px">&nbsp;Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">&nbsp;Kota</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <?php 
                    $query =mysqli_query($con,"SELECT*FROM kota ORDER BY id ASC");  
                   if (mysqli_num_rows($query)){
				       while($row_kat = mysqli_fetch_array($query)){
          ?>
                                    <select name="kota" id="" class="form-control" required>
                                        <option value="<?php echo $row_kat['kota']?>"><?php echo $row_kat['kota'];?>
                                        </option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="provinsi" id="" class="form-control" required>
                                        <option value="<?php echo $row_kat['provinsi']?>">
                                            <?php echo $row_kat['provinsi']?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php }
                      } ?>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <button type="submit" name="cart" class="btn btn-primary py-3 px-5"><img
                                        src="images/list.png" width="30px" alt=""> Make a Reservation</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Komentar</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php 
                    $query =mysqli_query($con,"SELECT*FROM testi");  
                   if (mysqli_num_rows($query)){
				       while($row_kat = mysqli_fetch_array($query)){
          ?>
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/profile.png)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="name"><?php echo $row_kat['nama'] ?></p>
                                <p class="mb-4">
                                    <?php echo$row_kat['testimoni'] ?>.</p>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i>
                                <i class="fas fa-star" style="color: yellow;"></i><br>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <?php }
                   }
               ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Recent Posts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div><a href="#">Sept. 06, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                        <p class="clearfix">
                            <a href="#" class="float-left read">Read more</a>
                            <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

    include('footer.php');
                    }      
    ?>