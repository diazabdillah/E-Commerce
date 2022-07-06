<!DOCTYPE html>
<html lang="en">

<body>
    <?php 
session_start();
require_once('config.php');
$page='contact';
include('header.php');
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Contact</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Testimony</h2>
                    <form action="testiproses.php" method="POST">
                        <div class="form-group">
                            <label for=""><img src="images/profile.png" width="30px" alt=""> Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for=""><img src="images/email.png" width="30px" alt=""> Email:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for=""><img src="images/review.png" width="30px" alt=""> Testimoni:</label>
                            <textarea name="testimoni" id="testimoni" cols="30" rows="7" class="form-control"
                                placeholder="Your Testimony" required></textarea>
                        </div>
                        <div class="form-group row pr-3">
                            <label class="col-sm-6 col-form-label">Upload Gambar Produk:</label>
                            <input type="file" name="gambar" id="gambar" class="form-control col-sm-6" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-6 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>

                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="dbox">
                        <p><img src="images/house.png" width="40px" alt=""><span>&nbsp;Address:</span> <a href=""> Jl
                                Sukolilo Damai 2 No 6 Dian Regency
                                Keputih,Sukolilo,Surabaya,Jawatimur,Indonesia,60111</a></p>
                    </div>


                    <div class="dbox">
                        <p><img src="images/contact.png" width="40px" alt=""><span>&nbsp;Phone:</span> <a
                                href="#">+628131913558</a></p>
                    </div>


                    <div class="dbox">
                        <p><img src="images/email.png" width="40px" alt=""><span>&nbsp;Email:</span> <a
                                href="#">diazabdillah20@gmail.com</a></p>
                    </div>

                    <div class="dbox">
                        <p><img src="images/shopee.png" width="40px" alt=""><span>&nbsp;Shopee:</span> <a
                                href="#">anekabarangsby</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="#">
                        <div class="form-group">
                            <label for=""><img src="images/profile.png" width="30px" alt=""> Nama:</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for=""><img src="images/email.png" width="30px" alt=""> Email:</label>
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for=""><img src="images/review.png" width="30px" alt=""> Testimoni:</label>
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Your Testimony"></textarea>
                        </div>
                        <div class="form-group row pr-3">
                            <label class="col-sm-6 col-form-label">Upload Gambar Produk:</label>
                            <input type="file" name="gambar" class="form-control col-sm-6">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Feliciano</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>