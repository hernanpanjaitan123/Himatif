<h2>Tambah Pengumuman</h2>
	
<br></br>
<form action="proses/tambahpengumuman.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Pengumuman</label>
		<input type="text" class="form-control" name="judul"">
	</div>
	<div class="form-group">
		<label>Tanggal Pengumuman</label>
		<input type="date" class="form-control" name="tanggal">
	</div>
	<div class="form-group">
		<label>Detail Pengumuman</label>
		<textarea name="detail" class="form-control" rows="10">
		</textarea>
	</div>
	<div class="form-group">
		<label>Foto Pengumuman</label>
		<input type="file" class="form-control" name="foto" required="required">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>



