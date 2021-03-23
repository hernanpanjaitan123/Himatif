<?php 
include 'koneksi.php';

?>
<h2>Acara Kegiatan Himatif</h2>
<form action="index.php?halaman=carikegiatan" method="post" class="navbar-from navbar-right">
	<input type="text" name="keyword">
	<button class="btn btn-primary" name="cari_kegiatan">Cari</button>
</form>
<br></br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama</th>
			<!-- <th>Waktu</th>
			<th>Akhir Kegiatan</th>
			<th>tempat</th>
			<th>deskripsi</th> -->
			<th>Status Kegiatan</th>
			<th>Foto Kegiatan </th>
			<!-- <th>Penulis</th> -->
			<th>aksi</th>
			
		</tr>	
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM kegiatan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kegiatan']; ?></td>
			<!-- <td><?php echo $pecah['waktu_kegiatan']; ?></td>
			<td><?php echo $pecah['tanggal_berakhir']; ?></td>
			<td><?php echo $pecah['tempat_kegiatan']; ?></td>
			<td><?php echo $pecah['deskripsi_kegiatan']; ?></td> -->
			<td><?php echo $pecah['status_kegiatan']; ?></td>
			<td>
				<img src="../foto_kegiatan/<?php echo $pecah['foto_kegiatan']; ?>" width="100">
			</td>
			<!-- <td><?php echo $pecah['penulis']; ?></td> -->
			<td>
				<a href="index.php?halaman=viewkegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn btn-info btn-xs">View</a>
				<a href="index.php?halaman=hapuskegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn-danger btn-xs">Hapus</a>
				<a href="index.php?halaman=ubahkegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn btn-warning btn-xs">Ubah</a>
			</td>
			
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
</table>

<a href="index.php?halaman=tambahkegiatan" class="btn btn-primary">Tambah Kegiatan</a>

<!-- //WHERE tanggal_berakhir > NOW() -->