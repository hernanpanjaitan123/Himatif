<?php 
session_start();

$koneksi =  new mysqli("localhost","root","","himatif1");

// var_dump($_GET['id_mahasiswa']);
// die();

$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE mahasiswa_id ='$_GET[id_mahasiswa]'");
$pecah = $ambil->fetch_assoc();

if (isset($_POST['save']))
{
	$namafoto= $_FILES['foto']['name'];
	$lokasifoto= $_FILES['foto']['tmp_name'];
	

	if(!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../../foto_mahasiswa/$namafoto");
		$koneksi->query("UPDATE mahasiswa SET username= '$_POST[user]',
				password ='$_POST[pass]', nama = '$_POST[nama]', nim = '$_POST[nim]', kelas = '$_POST[kelas]', angkatan = '$_POST[angkatan]', alamat = '$_POST[alamat]', email = '$_POST[email]', status_mahasiswa = '$_POST[status]', tempat_lahir = '$_POST[tempat]', tanggal_lahir = '$_POST[tanggal]', role = '$_POST[role]', foto_mahasiswa = '$namafoto' WHERE mahasiswa_id = '$_GET[id_mahasiswa]'");

	}
	else
	{
		$koneksi->query("UPDATE mahasiswa SET username= '$_POST[user]',
				password ='$_POST[pass]', nama = '$_POST[nama]', nim = '$_POST[nim]', kelas = '$_POST[kelas]', angkatan = '$_POST[angkatan]', alamat = '$_POST[alamat]', email = '$_POST[email]', status_mahasiswa = '$_POST[status]', tempat_lahir = '$_POST[tempat]', tanggal_lahir = '$_POST[tanggal]', role = '$_POST[role]' WHERE mahasiswa_id = '$_GET[id_mahasiswa]'");
	}
	
	// echo "<div class='alert alert-info'>Pengumuman berhasil dirubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=mahasiswa'>";
	// var_dump($pecah);
}
?>
















