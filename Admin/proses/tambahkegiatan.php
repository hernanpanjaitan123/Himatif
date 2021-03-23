<?php 
session_start();
  // skrip koneksi
$koneksi = new mysqli("localhost", "root", "", "himatif1");

	if (isset($_POST['save']))
	{
		$bphQuery = $koneksi->query("SELECT * FROM bph WHERE mahasiswa_id = " . $_SESSION['mahasiswa']['mahasiswa_id']);
		$bph=$bphQuery->fetch_assoc();
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi,"../../foto_kegiatan/".$nama);
		$koneksi->query("INSERT INTO kegiatan
			(nama_kegiatan, waktu_kegiatan, tanggal_berakhir, tempat_kegiatan, foto_kegiatan, deskripsi_kegiatan,status_kegiatan, penulis, bph_id, periode_id)
			VALUES('$_POST[nama]', '$_POST[waktu]','$_POST[akhir]','$_POST[tempat]','$nama','$_POST[deskripsi]','$_POST[status]', '$_POST[penulis]', '$bph[bph_id]', '$bph[periode_id]')");

		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=kegiatan'>";	
	}

?>

