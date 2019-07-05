//untuk menampilkan hasil dari biodata yang telah di isi
<?php
echo "<head><title>Data Pengunjung</title></head>";
$fp = fopen("data.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "<tr><td>nama</td><td>: $pisah[0]</td></tr>";
echo "<tr><td>alamat</td><td>: $pisah[1]</td></tr>";
echo "<tr><td>NO</td><td>: $pisah[2]</td></tr>";
echo "<tr><td>status</td><td>: $pisah[3]</td></tr>";
}
echo "</table>";
echo "<a class=btn href=halaman.php>Isi Kembali Biodata </a>";
?>

			
