<?php 

$koneksi =  new mysqli("localhost","root","","himatif1");

$ambil = $koneksi->query("SELECT * FROM uang_kas WHERE uang_kas_id ='$_GET[id_uang_kas]'");
$pecah = $ambil->fetch_assoc();

 
if (isset($_POST['save'])) {
	$koneksi->query("UPDATE uang_kas SET jumlah_bayar = '$_POST[jumlah]',
				tanggal_dibuat ='$_POST[awal]', tanggal_berakhir = '$_POST[akhir]', deskripsi_pembayaran = '$_POST[deskripsi]', WHERE uang_kas_id = '$_GET[id_uang_kas]'");

	// echo "<div class='alert alert-info'>Pengumuman berhasil dirubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=uangkas'>";
	//var_dump($pecah);
}
?>