<?php 

$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE kegiatan_id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_kegiatan = $pecah['foto_kegiatan'];
if (file_exists("../../foto_kegiatan/$foto_kegiatan"))
{
	unlink("../../foto_kegiatan/$foto_kegiatan");
}

$koneksi->query("DELETE FROM kegiatan WHERE kegiatan_id ='$_GET[id]'");

echo "<script>alert('kegiatan sudah dihapus');</script>";
echo "<script>location='index.php?halaman=kegiatan';</script>";

?>