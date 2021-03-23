<?php 
session_start();
  // skrip koneksi
$koneksi = new mysqli("localhost", "root", "", "himatif1");

	if (isset($_POST['save']))
	{
		$bphQuery = $koneksi->query("SELECT * FROM bph WHERE mahasiswa_id = " . $_SESSION['mahasiswa']['mahasiswa_id']);
		$bph=$bphQuery->fetch_assoc();
		$data = explode('|', $_POST['mahasiswa']);
		$koneksi->query("INSERT INTO uang_kas
			(jumlah_bayar, tanggal_bayar, tanggal_berakhir, deskripsi_pembayaran,status_pembayaran,mahasiswa_id,bph_id, periode_id)
			VALUES('$_POST[jumlah]', '$_POST[awal]','$_POST[akhir]','$_POST[deskripsi]' , '$_POST[status]','$data[0]', '$bph[bph_id]', '$bph[periode_id]')");

		//echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=uangkas'>";	
	}

?>

