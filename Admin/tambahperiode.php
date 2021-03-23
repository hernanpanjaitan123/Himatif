<h2>Tambah Periode</h2>



<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Periode Awal</label>
		<input type="text" class="form-control" name="awal"">
	</div>
	<div class="form-group">
		<label>Periode Akhir</label>
		<input type="text" class="form-control" name="akhir">
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="number" min="1" class="form-control" name="status" max="1">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>

<?php 
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO periode (periode_awal,periode_akhir,status)VALUES('$_POST[awal]',
			 '$_POST[akhir]', '$_POST[status]' )");

	echo "<div class='alert alert-info'>Periode berhasil di Tambahkan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=periode'>";
}
?>

