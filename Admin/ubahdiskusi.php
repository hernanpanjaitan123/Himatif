<h2>Ubah Diskusi</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM diskusi WHERE id_diskusi='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama diskusi</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_diskusi']; ?>">
	</div>
	<div class="form-group">
		<label>Jenis diskusi</label>
		<input type="text" class="form-control" name="jenis" value="<?php echo $pecah['jenis_diskusi']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi diskusi</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi_diskusi']; ?>
		</textarea>
	</div>
	
	<button class="btn btn-primary" name="save">Ubah</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$koneksi->query("UPDATE diskusi SET nama_diskusi= '$_POST[nama]',
				jenis_diskusi='$_POST[jenis]', deskripsi_diskusi = '$_POST[deskripsi]' WHERE id_diskusi = '$_GET[id]'");

	echo "<div class='alert alert-info'>Data tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=diskusi'>";
}
?>