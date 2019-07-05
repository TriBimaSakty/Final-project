<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="halaman.php">
	<script type="text/javascript" src="ini js.js"></script>
</head>
	//untuk menampilkan setelah mengisi biodata dan memilih isi buku tamu lagi atau lihat data pengunjung
<body> 
	<?php
	echo "<head><title>Konfirmasi</head></title>";
	$fp = fopen("data.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];


fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$file\n");
fclose($fp);
echo " Terimakasih telah mengisi buku tamu <br>";
echo "<a class=btn href=buku.html> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index.php> Lihat Profile </a><br> ";
?>

</body>
</html>
