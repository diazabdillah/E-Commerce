<!DOCTYPE html>
<html lang="en">
<?php
    require_once('config.php');
    $page='menu';
    include('header.php');
    ?>
  <body>
   
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
			<h1 class="mb-2 bread">Daftar Menu</h1>
			<p style="color: white;"class="md-2"> Silahkan Cari barang yang anda sukai</p> 
	
			<form action="menu.php" method="GET">
				
				<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="form-group">
					  <input style="border-radius: 10px;" type="text" name="cari" class="form-control"  placeholder="Cari Barang">
					</div>
				  </div>
				  <div class="col-md-4">
					<div class="form-group">
				  <button  style="width:200px;height:50px;border-radius: 5px;" class="btn btn-primary " type="submit"><img src="images/search.png" width="30px">&nbsp;Cari</button>			
					</div>
				  </div>
				</div>
		
				</form>
				
		
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
				<section class="ftco-section">
				<div class="heading-section text-center mb-4 my-5 my-md-0">
	          	<span class="subheading">Produk</span>
	            <h2 class="mb-4">AnekaBarangSby</h2>
	          </div>

					<div class="container">
						<div class="row">
				
	<?php 
	$data=mysqli_query($con,"SELECT * FROM barang");
	
	if(isset($_GET['cari'])){
		
		$data = mysqli_query($con,"SELECT*FROM barang WHERE nama LIKE '%".$_GET['cari']."%'");  				
	}

	
	while($d =mysqli_fetch_assoc($data)){
	?>	
	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $d['nama']?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price"><?php echo $d['harga']?></span>
							                </div>
							              </div>
							              <p><span><?php echo $d['deskripsi']?></span></p>
							              <p><a href="menu.php?beli=<?php echo $d['idbarang'] ?>" class="btn btn-primary">Order now</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

  <?php } ?>
  
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-4">
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link " href="#">1</a></li>
    <li class="page-item "><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
        </section>
        
        
        
    <?php
   
    $query =mysqli_query($con,"SELECT*FROM kategori ORDER BY id ASC");
    
		?>
		<section class="ftco-section">
		<div class="heading-section text-center mb-4 my-5 my-md-0">
	          	<span class="subheading">Kategori</span>
	            <h2 class="mb-4">AnekaBarangSby</h2>
	          </div>
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<?php 
				if (mysqli_num_rows($query)){
				while($row_kat = mysqli_fetch_array($query)){
				
				?>
				<a aria-controls="v-pills-1" href="menu.php?kategori=<?php echo $row_kat["id"] ?>"  class="nav-link ftco-animate <?php if($row_kat['id']=1){echo 'active';}?>"><?php echo $row_kat["namakategori"] ?></a>
				<?php 
			 }		
			} 
			  ?>
	            </div>
	            </div>
			
			 	  
			 	
          <?php 
        
          if(isset($_GET['kategori'])){
    $query3=mysqli_query($con,"SELECT barang.*,kategori.namakategori FROM barang,kategori WHERE barang.idbarang=kategori.id AND barang.idbarang=".$_GET['kategori']." ORDER BY barang.id ASC");
    
				if (mysqli_num_rows($query3)){
				while($row_jen = mysqli_fetch_array($query3)){
         
        ?>				
        <div class="col-md-12 tab-wrap">
	            
        <div class="tab-content" id="v-pills-tabContent">

          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
            <div class="row no-gutters d-flex align-items-stretch">
              <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
					              <div class="text d-flex align-items-center">
								  <div>						 
						              	<div class="d-flex">
											  			
							                <div class="one-half">
							                  <h3><?php echo $row_jen["nama"] ?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price"><?php echo $row_jen["harga"] ?></span>
							                </div>
							              </div>
							              <p><span><?php echo $row_jen["deskripsi"] ?></span></p>
							              <p><a href="menu.php?beli=<?php echo $row_jen["idbarang"] ?>" class="btn btn-primary">Order now</a></p>
								  
								  </div>
								  </div>
								 
					            </div>
							</div>
								</div>
								
							</div>
        </div>
				  </div>
        <?php 
          }
         
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
                <tr><th>Nama Produk</th>
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
                    <input type="email" name="email" class="form-control" placeholder="Your Email"required>
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
                    <input type="text" name="alamat" class="form-control"  placeholder="Alamat" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">&nbsp;Kota</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="kota" id="" class="form-control" required>
                        <option value="surabaya">Surabaya</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
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
                        <option value="jawatimur">Jawa Timur</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <button type="submit" name="cart" class="btn btn-primary py-3 px-5"><img src="images/list.png" width="30px" alt=""> Make a Reservation</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
    <?php
    include('footer.php');
    ?>		
  