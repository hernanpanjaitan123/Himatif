<h2>Silahkan Menambah Kegiatan Himatif</h2>
<?php


include 'koneksi.php';
?>

<form action="proses/tambahkegiatan.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kegiatan</label>
		<input type="text" class="form-control" name="nama" required="required">
	</div>
	<div class="col-md-6">
		<label>Waktu Kegiatan</label>
		<input type="date" class="form-control" name="waktu" required="required">
	</div>
	<div class="col-md-6">
		<label>Tanggal Berakhir</label>
		<input type="date" class="form-control" name="akhir" required="required">
	</div>	
	<div class="form-group">
		<label>Tempat Kegiatan</label>
		<input type="text" class="form-control" name="tempat" required="required">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10" ></textarea>
	</div>
	<div class="form-group">
		<label>Status Kegiatan</label>
		<select class="form-control" name="status">
			<option value="">--Pilih Status--</option>
			<option value="Terlaksanakan">Terlaksanakan</option>
			<option value="Belum Terlaksanakan">Belum Terlaksanakan</option>
		</select>
	</div>
	<div class="form-group">
		<label>Foto Kegiatan</label>
		<input type="file" class="form-control" name="foto" required="required">
	</div>
	<div class="form-group">
		<label>Penulis</label>
		<input type="text" class="form-control" name="penulis" value="<?php echo $_SESSION['mahasiswa']['nama'];  ?>">
	</div>

	


	<button class="btn btn-primary" name="save">Simpan</button>
</form>


