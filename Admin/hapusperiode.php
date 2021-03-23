<?php 

$ambil = $koneksi->query("SELECT * FROM periode WHERE periode_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM periode WHERE periode_id ='$_GET[id]'");

echo "<script>alert('periode sudah dihapus');</script>";
echo "<script>location='index.php?halaman=periode';</script>";

?>