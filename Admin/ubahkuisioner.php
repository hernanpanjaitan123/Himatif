<h2>Ubah Kuisioner</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM kuisioner WHERE id_kuisioner='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama kuisioner</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_kuisioner']; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kuisioner</label>
		<input type="text" class="form-control" name="jenis" value="<?php echo $pecah['jenis_kuisioner']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Kuisioner</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi_kuisioner']; ?>
		</textarea>
	</div>
	
	<button class="btn btn-primary" name="save">Ubah</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO kuisioner 
		(nama_kuisioner, jenis_kuisioner, deskripsi_kuisioner)
		VALUES('$_POST[nama]', '$_POST[jenis]','$_POST[deskripsi]' )");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kuisioner'>";
}
?>