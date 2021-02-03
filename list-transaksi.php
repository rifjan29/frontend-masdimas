<?php
session_start();

$con = new mysqli("localhost","root","","masdimas");
$username = $_SESSION['username'];
$data = mysqli_query($con, "SELECT pembelian.id_pembelian, pembelian.atasnama, pembelian.tanggal, pembelian.total, pembelian.status, pembelian.bukti_pembayaran, detail_pembelian.ud_pembelian FROM `pembelian` JOIN detail_pembelian ON pembelian.id_pembelian = detail_pembelian.ud_pembelian WHERE pembelian.username = '$username' GROUP BY detail_pembelian.ud_pembelian ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>List - Transaksi</title>

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
<section class="gambar">
    <div class="container">
        <h2 class="text-center">List Transaksi</h2><br>
        <?php
			if (isset($data)) {
				?>
    <table class="table table-bordered table-hover">
        <thead style="background-color:#E7AB3C" class="text-center">

                        <tr>
                            <th>No</th>
                            <th>Atasnama</th>
                            <th>Subtotal</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Bukti Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
        </thead>
        <tbody>
                        
                        <?php 
                        $nomor=1;
                        while ($item = mysqli_fetch_array($data)){ ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $item['atasnama'];?></td>
                                <td><?php echo $item['total'];?></td>
                                <td>
                                    <?php if($item['status'] == 'diproses' && $item['bukti_pembayaran'] != null){ 
                                        echo $item['status'] . '(menunggu persetujuan admin)';    
                                    }else{
                                        echo $item['status'];
                                    }?>
                                </td>
                                <td><?php echo $item['tanggal'];?></td>
                                <td>
                                    <?php if($item['status'] == 'dikirim' || $item['status'] == 'diproses' && $item['bukti_pembayaran'] != null){ ?>
                                        <img src="bukti_pembayaran/<?php echo $item['bukti_pembayaran'];?>" alt="<?php echo $item['bukti_pembayaran'];?>" width="200px" height="250px">
                                    <?php }else{ ?>
                                        <a href="uploadbukti.php?id=<?php echo $item['id_pembelian']?>" class='btn'>Upload Bukti Pembayaran</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="detailtransaksi.php?id=<?php echo $item['id_pembelian']?>" class='btn'>Detail</a>
                                    |
                                    <a href="hapustransaksi.php?id=<?php echo $item['id_pembelian']?>" class='btn'>Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++;?>
                        <?php } ?>
                    </tbody>
                </table>
      <?php
			}else{
				?>
					<center>
						<p>Maaf tidak ada keranjang yang tersimpan</p>
					</center>
				<?php
			}
		?>
		</div>
</section><br><br>
<div class='btn'>
		<br>
		<br>
		<?php
			if (isset($ambil)) {
			 ?>
				<a href="home.php" class="btn">Lanjutkan Belanja</a>
				<a href="checkout.php">CHECKOUT</a>
			<?php
			}else{
				?>
				<a href="home.php" class="btn">Lanjutkan Belanja</a>
				<?php
			}
		?>
		<br>
		<br>
	</div>
</body>
</html>