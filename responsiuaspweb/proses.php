<?php 
$tanggal = date('Y-m-d');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];

$fp = fopen("tokomakanan.txt", "a+");
fputs($fp, "$tanggal|$nama|$alamat|$makanan|$minuman\n");
fclose($fp);

header("Location: setelah-proses.php")
?>