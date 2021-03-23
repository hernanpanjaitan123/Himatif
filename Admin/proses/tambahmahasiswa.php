<?php 
session_start();
  // skrip koneksi
$koneksi = new mysqli("localhost", "root", "", "himatif1");
	
	if (isset($_POST['save'])) {
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$username = mysqli_real_escape_string($koneksi,$_POST['user']);
    $password = mysqli_real_escape_string($koneksi,$_POST['pass']);
	$passwd_hash = password_hash($password, PASSWORD_DEFAULT); // hash password
	move_uploaded_file($lokasi,"../../foto_mahasiswa/".$nama);
	$koneksi->query("INSERT INTO mahasiswa (username,password,nama,nim,kelas,angkatan,alamat,email,status_mahasiswa,tempat_lahir,tanggal_lahir,role,foto_mahasiswa)VALUES('$username','$passwd_hash', '$_POST[nama]','$_POST[nim]','$_POST[kelas]','$_POST[angkatan]','$_POST[alamat]','$_POST[email]','$_POST[status]','$_POST[tempat]','$_POST[tanggal]','$_POST[role]','$nama')");

	// echo "<div class='alert alert-info'>Periode berhasil di Tambahkan</div>";
	 echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=mahasiswa'>";

}
?>