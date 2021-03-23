<h2>Kelola Pengumuman</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<!-- <th>tanggal</th> -->
			<th>Detail</th>
			<!-- <th>Foto Pengumuman</th> -->
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pengumuman"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['judul_pengumuman']; ?></td>
			<!-- <td><?php echo $pecah['tanggal_akhir_pengumuman']; ?></td> -->
			<td><?php echo $pecah['detail_pengumuman']; ?></td>
			<!-- <td>
				<img src="../foto_pengumuman/<?php echo $pecah['foto_pengumuman']; ?>" width="100">
			</td> -->
			<td>
				<a href="index.php?halaman=hapuspengumuman&id=<?php echo $pecah['pengumuman_id']; ?>" class="btn-danger btn-xs">Hapus
				</a>
				<a href="index.php?halaman=ubahpengumuman&id=<?php echo $pecah['pengumuman_id']; ?>" class="btn btn-warning btn-xs">Ubah</a>
				<a href="index.php?halaman=viewpengumuman&id=<?php echo $pecah['pengumuman_id']; ?>" class="btn btn-info btn-xs">View</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
	
</table>
<a href="index.php?halaman=tambahpengumuman" class="btn btn-primary">Tambah Pengumuman</a>