<!DOCTYPE html>
<html>
<head>
	<title>FINAL PROJECT</title>
	<style type="text/css">
		@import "ini css.css"
	</style>
</head>
<body>

	<div class="atas">
		<marquee><h1>..''Selamat Datang''..</h1></marquee>
		<div class="satu">
			<div class="dua">
			<br><br>
				//untuk menghitung jumlah pengunjung yang datang
			<?php
				$filecounter="counter.txt";
				$fl=fopen($filecounter,"r+");
				$hit=fread($fl,filesize($filecounter));
				echo("<td width=250 valign=middle align=left>");
				echo("<font face=verdana size=3 color=#FEFFFD><b>");
				echo("Haii Anda pengunjung ke:");
				echo($hit);
				echo("</b></font>"); 
				echo("</td>"); 
				echo("</tr></table>");
				echo("<br>"); 
				fclose($fl);
				$fl=fopen($filecounter,"w+");
				$hit=$hit+1;
				fwrite($fl,$hit,strlen($hit));
				fclose($fl);
				echo("<br>"); 
			?>
			<h4>"SAAT INI PUKUL"</h4>
			<div class="waktu">
				<span class="jam"></span>
			</div><br><br>
			<a href="berita.php" class="link-button">Lihat Data Pengunjung</a>
			<br><br><br>
			<script>
			function cari() {
			var kata = document.formcari.keyword.value;
			var hasil= "http://www.google.com/search?q=" + kata ;
			window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') 
			}</script>
			<form name="formcari" onSubmit="cari()">*Jika Ada Kesulitan Gunakan Pencarian Google Di Bawah*
			<input name="keyword" size="30" type="text">
			<input type="submit" value="Cari!">
			</form>
			</div>
			<div class="tiga">
				<form name="forml" method="post" action="posting.php" enctype="multipart/form-data">
				<h2>*---SILAHKAN ISI DATA---*</h2>
				<tr>
					<td>Nama **sesuai KTP**</td><br>
					<td><input type="text" name="nama" id="nama"></td>
				</tr><br>
				<tr>
					<td>Alamat **sesuai KTP**</td><br>
					<td><input type="text" name="alamat" id="alamat"></td>
				</tr><br>
				<tr>
					<td>NO TLP</td><br>
					<td><input type="text" name="NO" id="NO"></td>
				</tr><br>
				<tr>
					<td>Tujuan Kemari</td><br>
					<td><select name="status" id="status">
						<option>------</option>
						<option>Belanja</option>
						<option>Lamar Kerja</option>
						<option>Antar Barang</option>
						<option>Lainnya</option>
					</select></td>
				</tr>
				<tr>
					<br>
					<td><input type="submit" name="Submit" value="Kirim"> | <input type="reset" name="Submit2" value="Batal"></td>
				</tr></form>
			</div>
			<div class="bawah">
			<font id="copy">
		</div>
	</div>
<script type="text/javascript" src="ini js.js"></script>
</body>
</html>
