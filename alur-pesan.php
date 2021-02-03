<?php
    session_start();
    include "konek.php"
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Masdimas</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="shortcut icon" href="gambar/logo.png" type="image/x-icon">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-instagram"></i> @jajanan_masdimas
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i> 081111653234
                    </div>
                </div>
                <div class="ht-right-login">
                    <div class="mail-service">
                        <?php
                            if (isset($_SESSION['username'])) {
                                ?>
                                 Selamat datang, <strong><?=$_SESSION['username']; ?></strong> 
                                <a type="button" href="logout.php" class="btn btn-primary">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Keluar
                                </a>
                            <?php
                            }else{
                        ?>
                            <a type="button" href="login.php" class="btn btn-primary">
                            <i class=" fa fa-user"></i> Masuk
                            </a>

                        <?php } ?>
                    </div>
                    <div class="phone-service">
                        <a type="button" class="btn btn-outline-secondary" href="daftar-akun.html">
                        <i class=" fa fa-user-plus"></i> Daftar Akun
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="gambar/logo.png" class="mw-50" alt="Gambar Loading" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7"></div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                Keranjang Belanja &nbsp;
                                <a href="#">
                                    <i class="icon_cart_alt"></i>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Beranda</a>
                            </li>
                            <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="produk.php">Produk</a>
                                    </li> 
                                <?php
                                }else{
                                    ?>
                                    <li class="nav-item">
                                    <a class="nav-link disabled" style="color:grey;" href="produk.php">Produk</a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link " href="tentang-kami.php">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="alur-pesan.php">Alur Pesanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <h3 class="text-center font-weight-bold mb-3">Cara Memesan :</h3>
                        <div class="container">
                            <ol>
                                <li class="pb-2">Pilih produk yang akan dibeli</li>
                                <li class="pb-2">Klik tambahkan pada produk</li>
                                <li class="pb-2">Klik <strong>icon Keranjang Belanja</strong> <i class="icon_cart_alt"></i>
                                    untuk melihat detail produk yang akan anda pesan</li>
                                <li class="pb-2">Klik <strong>checkout</strong> untuk memesan produk</li>
                                <li class="pb-2">Jika anda belum Login maka anda akan dialihkan ke menu login dan anda harus login terlebih dahulu</li>
                                <li class="pb-2">Setelah itu, pilih metode pembayaran dan metode pengiriman</li>
                              </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="gambar/logo.png"/></a>
                        </div>
                        <ul>
                            <li><strong>Alamat:</strong> Grenden Karangsono, Karang Sono, Grenden, Puger, Kabupaten Jember, Jawa Timur 68164.</li>
                            <li><strong>No HP:</strong> 081111653234</li>
                            <li><strong>Instagram:</strong> @jajanan_masdimas</li>
                        </ul>
                        <!-- <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Produk</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Alur Pesan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Keranjang</a></li>
                            <li><a href="#">Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | Masdimas
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>