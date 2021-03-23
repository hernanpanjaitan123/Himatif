<?php 

$ambil = $koneksi->query("SELECT * FROM diskusi WHERE id_diskusi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM diskusi WHERE id_diskusi='$_GET[id]'");

echo "<script>alert('Diskusi sudah dihapus');</script>";
echo "<script>location='index.php?halaman=diskusi';</script>";

?>