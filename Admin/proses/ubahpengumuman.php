<?php 

$koneksi =  new mysqli("localhost","root","","himatif1");

$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE pengumuman_id ='$_GET[id_pengumuman]'");
$pecah = $ambil->fetch_assoc();

 
if (isset($_POST['save'])) 
{
	$namafoto= $_FILES['foto']['name'];
	$lokasifoto= $_FILES['foto']['tmp_name'];
	// jika foto dirubah
	if(!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../../foto_pengumuman/$namafoto");
		$koneksi->query("UPDATE pengumuman SET judul_pengumuman= '$_POST[judul]',
				tanggal_akhir_pengumuman ='$_POST[tanggal]', detail_pengumuman = '$_POST[detail]',
				foto_pengumuman= '$namafoto' WHERE pengumuman_id = '$_GET[id_pengumuman]'");
	
	}
	else
	{
		$koneksi->query("UPDATE pengumuman SET judul_pengumuman= '$_POST[judul]',
				tanggal_akhir_pengumuman ='$_POST[tanggal]', detail_pengumuman = '$_POST[detail]'
				 WHERE pengumuman_id = '$_GET[id_pengumuman]'");	
	}
	
	// echo "<div class='alert alert-info'>Pengumuman berhasil dirubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=pengumuman'>";
	// var_dump($pecah);
}
?>
