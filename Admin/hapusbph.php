<?php 

$ambil = $koneksi->query("SELECT * FROM bph WHERE bph_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM bph WHERE bph_id ='$_GET[id]'");

echo "<script>alert('bph sudah dihapus');</script>";
echo "<script>location='index.php?halaman=detail[eriode';</script>";

?>