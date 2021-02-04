<?php
session_start();

$con = new mysqli("localhost","root","","masdimas");
$username = $_SESSION['username'];
$id = $_GET['id'];
$data = mysqli_query($con, "SELECT id_pembelian, atasnama, username, tanggal, total FROM pembelian WHERE username = '$username' AND id_pembelian = '$id'");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>List Transaksi</title>

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
                                <a type="button" href="list-transaksi.php" class="btn btn-primary">
                                <i class="fa fa-money" aria-hidden="true"></i></i> List-transaksi
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
<!-- modal untuk masuk akun -->
<div class="modal" id="masuk-akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Masuk </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Username" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Password" required="masukkan oy">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
        <div class="form-group">
            <div class="col-md-12 control">
                 <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Tidak punya akun! 
                    <a href="daftar-akun.html">
                        Daftar akun?
                     </a>
                </div>
            </div>
        </div>
       </form>
    </div>
  </div>
</div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="gambar/logo.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7"></div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                Keranjang Belanja &nbsp;
                                <a href="keranjang.php">
                                    <i class="icon_cart_alt"></i>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Upload Bukti Pembayaran</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

	<section class='gambar'>
		<div class='container'>
		<h2 class="text-center">Upload Bukti Pembayaran</h2><br>
			<?php while($item = mysqli_fetch_array($data)){ ?>
				  <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Atas Nama :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $item['atasnama'] ?>" disabled>
                        </div>
					  </div>                
                <?php 
                    $detail = mysqli_query($con, "SELECT * FROM detail_pembelian JOIN produk ON detail_pembelian.id_produk = produk.id_produk WHERE ud_pembelian = '$id'");
                    while($item_detail = mysqli_fetch_array($detail)){
				?>
					<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Produk :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="<?= $item_detail['nama'] ?>" disabled>
                        </div>
                      </div>  
                    <!-- <p><label>Produk : </label></p> -->
                    <img src="gambar/<?= $item_detail['gambar'] ?>" alt="<?= $item_detail['gambar'] ?>" width="150px" height="150px">
                <?php } ?>
            <?php } ?>
		</div>
	</section>
	<div class='btn'>
		<br>
		<br>
		<form action="uploadbukti_proses.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_pembelian" value="<?= $id ?>">
            <p><label for="bukti">Upload Bukti Pembayaran</label> <input type="file" class="form-control-file" name="bukti" id="bukti"></p>
            <input type="submit" class="btn btn-primary" value="Kirim">
        </form>
		<br>
        <br>
        
    </div>


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