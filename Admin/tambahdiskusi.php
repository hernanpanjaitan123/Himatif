<h2>Tambah Diskusi</h2>


<form method="post" enctype="multipart/form-data">
	<!-- <div class="form-group">
		<label>
		<input type="text" class="form-control" name="nama">	
		</label>
	</div> -->
	<div class="form-group">
		<label>Nama Diskusi</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Jenis Diskusi</label>
		<input type="text" class="form-control" name="jenis">
	</div>
	<div class="form-group">
		<label>Deskripsi diskusi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 

	if (isset($_POST['save']))
	{
		$koneksi->query("INSERT INTO diskusi
			(nama_diskusi, jenis_diskusi, deskripsi_diskusi)
			VALUES('$_POST[nama]', '$_POST[jenis]','$_POST[deskripsi]' )");

		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=diskusi'>";	
	}	
	
?>