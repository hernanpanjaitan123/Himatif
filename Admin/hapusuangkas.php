<?php 

$ambil = $koneksi->query("SELECT * FROM uang_kas WHERE uang_kas_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM uang_kas WHERE uang_kas_id ='$_GET[id]'");

echo "<script>alert('Uang Kas sudah dihapus');</script>";
echo "<script>location='index.php?halaman=uangkas';</script>";

?>