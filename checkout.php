<?php
session_start();
$con = new mysqli("localhost","root","","masdimas");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Checkout</title>

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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk-akun">
                        <i class=" fa fa-user"></i> Masuk
                        </button>
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
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic">
                                                        <img src="img/select-product-1.jpg" alt="" />
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic">
                                                        <img src="img/select-product-2.jpg" alt="" />
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
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
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

  <section class="gambar">
		<div class="container"><br>
            <h2 class="text-center">List Keranjang</h2><br>
            <form method="POST" action="checkout.php" class="form-inline">
                <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="atasnama" placeholder="Atas Nama (Lengkap)" required>
                    </div>
                  </div>
                    <div class="col-sm-6 mb-0 mb-sm-0">
                        <select class="custom-select mr-sm-2" name ="pembayaran" id="inlineFormCustomSelect" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="Transfer Bank ke BRI no REK.30xxxx">Transfer Bank ke BRI no REK.30xxxx</option>
                            <option value="GOPAY/OVO">GOPAY/OVO</option>
                            <option value="COD/Bayar Tunai">COD/Bayar Tunai</option>
                          </select>
                    </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="tanggal" placeholder="Email">
                        </div>
                      </div>               
            <br><br><br>
			<table class="table table-bordered table-hover">
                <thead style="background-color:#E7AB3C" class="text-center">
                  <tr>
                    <th>NO</th>
                    <th>GAMBAR</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                    <th>SUBTOTAL</th>
                  </tr>
                </thead>
                <tbody>
                <?php $nomor=1; ?>
					<?php $total = 0;?>
					<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
						<?php $ambil = $con->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
						$pecah = $ambil->fetch_assoc();
						$x = $pecah['id_produk'];
						$subharga = $pecah['harga']*$jumlah;
						$total += $subharga; 
						?>
                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <td> <img src='gambar/<?php echo $pecah['gambar'];?>' width="50" weight="80" alt=""></td>
                    <td><?php echo $pecah['nama'];?></td>
                    <td><?php echo $pecah['harga'];?></td>
                    <td><?php echo $jumlah;?></td>
                    <td><?php echo number_format($subharga);?></td>  
                  </tr>
                  <?php $nomor++;?>
					<?php endforeach ?>
                </tbody>
                <tfoot>
					<tr>
						<th colspan="5">TOTAL BAYAR : </th>
						<th name='total'>Rp.  <?php echo number_format($total);?></th>
					</tr>
                </tfoot>    
              </table>
              <div class="d-flex justify-content-end">
                <div class="p-2">
                <input type="submit" class="btn btn-primary" id="transaksi" name='transaksi' value="Transaksi">
                <a href="aboutus.php" class="btn btn btn-outline-warning" role="button" aria-pressed="true">Hubungi Penjual</a>
                </div>
              </div>
              </form>
              <?php
			if (isset($_POST["transaksi"]))
			{
				include 'konek.php';
				$username = $_SESSION['username'];
				$atasnama = $_POST['atasnama'];
				$pembayaran = $_POST['pembayaran']; //metode pembayaran
				$tanggal = $_POST['tanggal'];
				$sub_total = $total;
				$id = $id_produk;
				// untuk memanggil nilai dari total jika $_POST[] dalam bentuk array 
			if ($tanggal != null) {
				// echo "<script>console.log('Debug Objects: lolos1' );</script>";
				if ($pembayaran != "null") {
					$sql = mysqli_query($con,"INSERT INTO pembelian(username,atasnama,tanggal,pembayaran,total) VALUES('$username','$atasnama','$tanggal','$pembayaran','$sub_total')");
					try{
						if (isset($sql)) {
							$id = $con->insert_id;
							// $detail_pembelian = mysqli_query($con,"INSERT INTO detail_pembelian VALUES('$id ,')")
							foreach ($_SESSION['keranjang'] as $id_produk => $jumlah):
								$ambil = $con->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
								$pecah = $ambil->fetch_assoc();
								$subharga = $pecah['harga']*$jumlah;
								$detail_pembelian = mysqli_query($con, "INSERT INTO detail_pembelian VALUES ('$id','$id_produk','$jumlah','$subharga')");
								echo "<script>alert('Transaksi Berhasil! Pesanan sedang diproses');</script>";
								echo "<script>location='index.php';</script>";
								unset($_SESSION['keranjang']);
							endforeach;
						}else{
							echo "Error! Mohon untuk mencoba kembali";
						}
					}
					catch(Exception $e){
						echo "<script>console.log('Debug Objects: ".$e->getMessage()."' );</script>";
						echo "Error! Mohon untuk mencoba kembali";
					}
				}else{
					
					?>
						<p style="color:red"> Maaf Pembayaran harus terisi !</p>
					<?php
				}
			}else{
				?>
					<p style="color:red"> Tanggal Harus Diisi... !</p>
				<?php
		
			}
			}
			?>
          </section><br><br>

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