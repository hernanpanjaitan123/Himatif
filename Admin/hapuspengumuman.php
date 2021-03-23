<?php 

$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE pengumuman_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM pengumuman WHERE pengumuman_id ='$_GET[id]'");

echo "<script>alert('pengumuman sudah dihapus');</script>";
echo "<script>location='index.php?halaman=pengumuman';</script>";

?>