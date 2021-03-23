<h2>Update Periode</h2>
<?php 

$ambil = $koneksi->query("SELECT * FROM periode WHERE periode_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Periode Awal</label>
		<input type="text" class="form-control" name="awal" value="<?php echo $pecah['periode_awal']; ?>">
	</div>
	<div class="form-group">
		<label>Periode Akhir</label>
		<input type="text" class="form-control" name="akhir" value="<?php echo $pecah['periode_akhir']; ?>">
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="number" class="form-control" name="status" value="<?php echo $pecah['status']; ?>">
	</div>
	
	<button class="btn btn-primary" name="save">Ubah</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$koneksi->query("UPDATE periode SET periode_awal= '$_POST[awal]',
				periode_akhir ='$_POST[akhir]', status = '$_POST[status]' WHERE periode_id = '$_GET[id]'");

	echo "<div class='alert alert-info'>Periode berhasil dirubah</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=periode'>";
}
?>