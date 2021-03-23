<h2>Ubah Kegiatan</h2>


<?php 

$koneksi =  new mysqli("localhost","root","","himatif1");

$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE kegiatan_id ='$_GET[id_kegiatan]'");
$pecah = $ambil->fetch_assoc();


	if (isset($_POST['ubah']))
	{
		$namafoto= $_FILES['foto']['name'];
		$lokasifoto= $_FILES['foto']['tmp_name'];
		// jika foto dirubah
		if(!empty($lokasifoto))
		{
			move_uploaded_file($lokasifoto, "../../foto_kegiatan/$namafoto");
			$koneksi->query("UPDATE kegiatan SET nama_kegiatan= '$_POST[nama]',
				waktu_kegiatan='$_POST[waktu]',tanggal_berakhir='$_POST[akhir]',tempat_kegiatan='$_POST[tempat]', foto_kegiatan= '$namafoto', deskripsi_kegiatan = '$_POST[deskripsi]', penulis='$_POST[penulis]' WHERE kegiatan_id = '$_GET[id_kegiatan]'");
		}
		else
		{
			$koneksi->query("UPDATE kegiatan SET nama_kegiatan= '$_POST[nama]',
				waktu_kegiatan='$_POST[waktu]',tanggal_berakhir='$_POST[akhir]', tempat_kegiatan='$_POST[tempat]', deskripsi_kegiatan = '$_POST[deskripsi]', status_kegiatan = '$_POST[status]', penulis = '$_POST[penulis]' WHERE kegiatan_id = '$_GET[id_kegiatan]'");
		}
		 //echo "<script>alert('data kegiatan telah diubah');</script>";
		 echo "<script>location='../index.php?halaman=kegiatan'</script>";

		// var_dump($pecah);
	}
?> 