<?php 

$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE mahasiswa_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM mahasiswa WHERE mahasiswa_id ='$_GET[id]'");

echo "<script>alert('mahasiswa sudah dihapus');</script>";
echo "<script>location='index.php?halaman=mahasiswa';</script>";

?>