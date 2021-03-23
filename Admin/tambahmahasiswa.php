<h2>Tambah Mahasiswa</h2>



<form action="proses/tambahmahasiswa.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="user"">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="pass">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                     <option value="">-Pilih Jenis Kelamin-</option>
                              <?php $ambil=$koneksi->query("SELECT * FROM jenis_kelamin"); ?>
                                <?php while($pecah = $ambil->fetch_assoc()){ 
                                echo '<option value = "'. $pecah['idjenis_kelamin'].'">'.$pecah['nama_jenis_kelamin'].'</option>'; 
                              }?>
                    </select>
	</div>
	<div class="form-group">
		<label>Nim</label>
		<input type="text" class="form-control" name="nim">
	</div>
	<div class="form-group">
		<label>Kelas</label>
		<input type="text" class="form-control" name="kelas">
	</div>
	<div class="form-group">
		<label>Angkatan</label>
		<input type="text" class="form-control" name="angkatan">
	</div>
		<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Email Akademik</label>
		<input type="text" class="form-control" name="email">
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
		<label>Foto Mahasiswa</label>
		<input type="file" class="form-control" name="foto" required="required">
	</div>
	<div class="col-md-6">
		<label>Tempat Lahir</label>
		<input type="text" class="form-control" name="tempat">
	</div>
	<div class="col-md-6">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal">
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
	<button class="btn btn-primary" name="save">Simpan</button>	
</form>



