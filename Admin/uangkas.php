<h2>Uang Kas Himatif</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama Pembayar</th>
			<!-- <th>jumlah</th>
			<th>Tanggal dibuat</th>
			<th>Tanggal berakhir</th> -->
			<th>Deskripsi</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT u.uang_kas_id,u.bph_id,u.periode_id,u.jumlah_bayar,u.tanggal_bayar,u.deskripsi_pembayaran,u.status_pembayaran,u.mahasiswa_id,m.nama FROM uang_kas u inner join mahasiswa m on u.mahasiswa_id = m.mahasiswa_id"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<!-- <td><?php echo $pecah['jumlah_bayar']; ?></td>
			<td><?php echo $pecah['tanggal_dibuat']; ?></td>
			<td><?php echo $pecah['tanggal_berakhir']; ?></td> -->
			<td><?php echo $pecah['deskripsi_pembayaran']; ?></td>
			<td>
				<a href="index.php?halaman=ubahuangkas&id=<?php echo $pecah['uang_kas_id']; ?>" class="btn btn-info">Ubah</a>
				<a href="index.php?halaman=detailuang&id=<?php echo $pecah['uang_kas_id']; ?>" class="btn btn-success">Detail</a>
				<a href="index.php?halaman=hapusuangkas&id=<?php echo $pecah['uang_kas_id']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
</table>


<a href="index.php?halaman=tambahuangkas" class="btn btn-primary">Tambah UangKas</a>