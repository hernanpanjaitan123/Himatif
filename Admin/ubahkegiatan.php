<h2>Ubah Kegiatan</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE kegiatan_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<br></br>
<form action="proses/ubahkegiatan.php?id_kegiatan=<?php echo $pecah['kegiatan_id']?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama kegiatan</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_kegiatan']; ?>">
	</div>
	<div class="col-md-6">
		<label>Waktu Kegiatan</label>
		<input type="date" class="form-control" name="waktu" value="<?php echo $pecah['waktu_kegiatan']; ?>">
	</div>
	<div class="col-md-6">
		<label>Tanggak Berakhir</label>
		<input type="date" class="form-control" name="akhir" value="<?php echo $pecah['tanggal_berakhir']; ?>">
	</div>
	<div class="form-group">
		<label>Tempat Kegiatan</label>
		<input type="text" class="form-control" name="tempat" value="<?php echo $pecah['tempat_kegiatan']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Kegiatan</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi_kegiatan']; ?>
		</textarea>
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
		<img src="../foto_kegiatan/<?php echo $pecah['foto_kegiatan'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<!-- <div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_produk']; ?>">
	</div> -->
	<div class="form-group">
		<label>Penulis</label>
		<input type="text" class="form-control" name="penulis" value="<?php echo $pecah['penulis']; ?>">
	</div>

	<button class="btn btn-primary" name="ubah">Ubah</button>	
</form>

