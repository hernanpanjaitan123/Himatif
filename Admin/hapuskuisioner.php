<?php 

$ambil = $koneksi->query("SELECT * FROM kuisioner WHERE id_kuisioner='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM kuisioner WHERE id_kuisioner='$_GET[id]'");

echo "<script>alert('kuisioner sudah dihapus');</script>";
echo "<script>location='index.php?halaman=kuisioner';</script>";

?>