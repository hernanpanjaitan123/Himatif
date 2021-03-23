<h2>Mahasiswa Himatif</h2>
<form action="pencarian.php" method="get" class="navbar-from navbar-right">
	<input type="text" name="keyword">
	<button class="btn btn-primary">Cari</button>
</form>

<br><br>
<label>Export :</label>
<a href="export.php"><button>Export to Excel</button></a><br/>
<br>
<label>Import Excel :</label>
<a href="../csv/index.php"><button>Import your Excel</button></a>
<br><br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<!-- <th>Username</th>
			<th>Password</th> -->
			<th>Nama</th>
			<th>Nim</th>
			<th>Angkatan</th>
			<!-- <th>Kelas</th>
			<th>Alamat</th> -->
			<th>Email</th>
			<!-- <th>Status Mahasiswa</th> -->
			<!-- <th>Tempat/Tanggal-Lahir</th> -->
			<!-- <th>Role</th> -->
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM mahasiswa ORDER BY nama ASC"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<!-- <td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password']; ?></td> -->
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['nim']; ?></td>
			<td><?php echo $pecah['angkatan']; ?></td>
			<!-- <td><?php echo $pecah['kelas']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td> -->
			<td><?php echo $pecah['email'];?></td>
			<!-- <td><?php echo $pecah['status_mahasiswa']; ?></td>
			<td><?php echo $pecah['tempat_lahir'] ?>,<?php echo $pecah['tanggal_lahir']; ?> </td> -->
			<!-- <td><?php echo $pecah['role']; ?></td> -->
			<td>
				<img src="../foto_mahasiswa/<?php echo $pecah['foto_mahasiswa']; ?>" width="100">
			</td>			
			<td>
				<a href="index.php?halaman=viewmahasiswa&id=<?php echo $pecah['mahasiswa_id']; ?>" class="btn btn-info btn-xs">View</a>
				<a href="index.php?halaman=ubahmahasiswa&id=<?php echo $pecah['mahasiswa_id']; ?>" class="btn btn-warning btn-xs">Ubah</a>
				<a href="index.php?halaman=hapusmahasiswa&id=<?php echo $pecah['mahasiswa_id']; ?>" class="btn btn-danger btn-xs">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
	
</table>
<a href="index.php?halaman=tambahmahasiswa" class="btn btn-primary btn-md">Tambah Mahasiswa</a>