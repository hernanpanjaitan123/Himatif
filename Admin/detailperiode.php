<h3>Data BPH Periode <?= $_GET['periode'] ?> </h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Mahasiswa</th>
			<th>Jabatan</th>
			<th>Angkatan</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php
		$periode = $_GET['periode'];
		 $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM bph inner join  mahasiswa on bph.mahasiswa_id = mahasiswa.mahasiswa_id inner join periode on periode.periode_id = bph.periode_id where periode.periode_awal = $periode "); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['jabatan']; ?></td>
			<td><?php echo $pecah['angkatan']; ?></td>
			<td>
			<a href="index.php?halaman=hapusbph&id=<?php echo $pecah['bph_id']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
	
</table>
<a href="index.php?halaman=tambahpengurus" class="btn btn-primary btn-md">Tambah BPH</a>