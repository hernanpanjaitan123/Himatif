<?php 
session_start();
$koneksi = new mysqli("localhost", "root", "", "himatif1");

if (isset($_POST['save'])) {

	
	$bphQuery = $koneksi->query("SELECT * FROM bph WHERE mahasiswa_id = " . $_SESSION['mahasiswa']['mahasiswa_id']);
	$bph=$bphQuery->fetch_assoc();
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi,"../../foto_pengumuman/".$nama);
	$koneksi->query("INSERT INTO pengumuman (judul_pengumuman,tanggal_akhir_pengumuman,detail_pengumuman, foto_pengumuman, bph_id, periode_id)VALUES('$_POST[judul]','$_POST[tanggal]', '$_POST[detail]','$nama', '$bph[bph_id]', '$bph[periode_id]' )");

	echo "<div class='alert alert-info'>Pengumuman berhasil di Tambahkan</div>";
	echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=pengumuman'>";
}
?>
