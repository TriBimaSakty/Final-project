<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@import "tampilan.css"
	</style>
</head>
<body>
	<div class="puncak">
	<h1 align="center">Baguss!! Selanjutnya silahkan pilih dua pilihan di bawah ini</h1>
	<div class="badan">
	<?php
	echo "<head><title>Konfirmasi</head></title>";
	$fp = fopen("data.txt","a+");
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];	
	$NO = $_POST['NO'];
	$status = $_POST['status'];
	fputs($fp,"$nama|$alamat|$NO|$status\n");
	fclose($fp);
	echo "<a class=btn href=halaman.php> Isi Kembali Biodata </a><====>";
	echo "<a class=btn href=berita.php> Lihat Data Pengunjung </a>";
	?>
	</div></div>


</body>
</html>





