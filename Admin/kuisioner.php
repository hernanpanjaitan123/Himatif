	<?php 
		$id = $_GET['id'];
	?>
	<h2>Kuisioner Himatif</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>no</th>
				<th>Pertanyaan pertama</th>
				<th>Pertanyaan kedua</th>
				<th>Pertanyaan ketiga</th>
				<th>Pertanyaa Keempat</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM kuisioner_kegiatan WHERE kegiatan_id='$id'"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['jab1']; ?></td></a>
				<td><?php echo $pecah['jab2']; ?></td>
				<td><?php echo $pecah['jab3']; ?></td>
				<td><?php echo $pecah['jab4']; ?></td>
				<td>
					<a href="index.php?halaman=hapuskuisioner&id=<?php echo $pecah['id_kuisioner']; ?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahkuisioner&id=<?php echo $pecah['id_kuisioner']; ?>" class="btn btn-warning">Ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }  ?>

		</tbody>
	</table>