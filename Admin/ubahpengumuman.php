<h2>Update Pengumuman</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE pengumuman_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<form action="proses/ubahpengumuman.php?id_pengumuman=<?php echo $pecah['pengumuman_id']?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Pengumuman</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul_pengumuman']; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Pengumuman</label>
		<input type="text" class="form-control" name="tanggal" value="<?php echo $pecah['tanggal_akhir_pengumuman']; ?>">
	</div>
	<div class="form-group">
		<label>Detail Pengumuman</label>
		<textarea name="detail" class="form-control" rows="10">
			<?php echo $pecah['detail_pengumuman']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<img src="../foto_pengumuman/<?php echo $pecah['foto_pengumuman'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	
	<button class="btn btn-primary" name="save">Ubah</button>	
</form>
