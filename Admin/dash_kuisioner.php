<h3>Kuisioner</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kuisioner</th>
			<th>Tempat Kegiatan</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM kegiatan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><a href=<?= '"index.php?halaman=kuisioner&id='.$pecah['kegiatan_id'] . '"'; ?>><?php echo $pecah['nama_kegiatan']; ?></td></a>
			<td><?php echo $pecah['tempat_kegiatan']; ?></td>
			<!-- <td>
				<a href="index.php?halaman=hapusmahasiswa&id=<?php echo $pecah['mahasiswa_id']; ?>" class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahmahasiswa&id=<?php echo $pecah['mahasiswa_id']; ?>" class="btn btn-warning">Ubah</a>
			</td> -->
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
	
</table>