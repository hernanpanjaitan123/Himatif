<h2>Update Data Mahasiswa</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE mahasiswa_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<form action="proses/ubahmahasiswa.php?id_mahasiswa=<?php echo $pecah['mahasiswa_id']?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="user" value="<?php echo $pecah['username']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="pass" value="<?php echo $pecah['password']; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Nim</label>
		<input type="text" class="form-control" name="nim" value="<?php echo $pecah['nim']; ?>">
	</div>
	<div class="form-group">
		<label>Kelas</label>
		<input type="text" class="form-control" name="kelas" value="<?php echo $pecah['kelas']; ?>">
	</div>
	<div class="form-group">
		<label>Angkatan</label>
		<input type="text" class="form-control" name="angkatan" value="<?php echo $pecah['angkatan']; ?>">
	</div>
		<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="10" >
			<?php echo $pecah['alamat']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>Email Akademik</label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email']; ?>">
	</div>
	<div class="form-group">
		<label>Status Mahasiswa</label>
		<select class="form-control" name="status">
			<option value="">--Pilih Status--</option>
			<option value="aktif">Aktif</option>
			<option value="tidak aktif">Tidak Aktif</option>
		</select>
	</div>
	<div class="form-group">
		<img src="../foto_mahasiswa/<?php echo $pecah['foto_mahasiswa'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="col-md-6">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" name="tempat" value="<?php echo $pecah['tempat_lahir']; ?>">
	</div>
	<div class="col-md-6">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal" value="<?php echo $pecah['tanggal_lahir']; ?>">
	</div>

	<br></br>
	<br>
	<br>		
	<div class="form-group">
		<label>Role</label>
		<select class="form-control" name="role">
			<option value="">--Pilih Role--</option>
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select>
	</div>
	<br></br>
	
	<button class="btn btn-primary" name="save">Ubah</button>	
</form>

