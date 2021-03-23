<h2>Detail Kuisioner</h2>

<?php 
session_start();

//mendapatkan id_userdari url
$kegiatan_id = $_GET["id"];


//mengambil data kuisioner berdasarkan id_user
$ambil = $koneksi->query("SELECT * FROM kuisioner WHERE bph_id ='$bph_id' ");
$detail = $ambil->fetch_assoc();

?>

<h2><center>Detail Pembelian <?php echo $detail['nama_pelanggan']; ?></center></h2> <br>
