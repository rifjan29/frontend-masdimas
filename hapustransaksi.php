<?php
include 'konek.php';
// $ambil=$con->query("SELECT * FROM pembelian WHERE id_pembelian='$_GET[id]'");
// $pecah = $ambil->fetch_assoc();
// $gambar = $pecah['bukti_pembayaran'];
// if (file_exists("../bukti_pembayaran/$gambar"))
// {
// 	unlink("../gambar/$gambar");
// }
$con->query("DELETE FROM pembelian WHERE id_pembelian = '$_GET[id]'");
echo "<div class='alert alert-info'>Data telah dihapus</div>";
echo "<meta http-equiv='refresh' content='1;url=list-transaksi.php?halaman=produk'>";
?>