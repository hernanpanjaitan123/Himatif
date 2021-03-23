<!-- <?php 
	include'koneksi.php';
	session_start(); 

	$keyword = $_GET["keyword"];
	$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE nama_kegiatan LIKE '%$keyword%' OR tempat_kegiatan LIKE '%$keyword%' ");
	$semuadata = array();
	while ($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}
?> -->

<?php
	include 'koneksi.php';
    if(isset($_POST['cari_kegiatan']))
    {
        $_SESSION['pencarian_kegiatan'] = $_POST['keyword'];
        $keyword = $_SESSION['pencarian_kegiatan'];
    }else
    {
        $keyword = ['pencarian_kegiatan'];
    }

    $ambil = $koneksi->query("SELECT * FROM kegiatan WHERE nama_kegiatan LIKE '%$keyword%' OR tempat_kegiatan LIKE '%$keyword%' ");
	$semuadata = array();
	while ($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pencarian Kegiatan</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<h3>Hasil Pencarian: <?= $keyword; ?></h3>

			<?php if (empty($semuadata)): ?>
				<div class="alert alert-danger">Nama <?= $keyword . "Tidak Ditemukan"; ?> </div>
			<?php endif ?>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kegiatan</th>
					<th>Waktu Kegiatan</th>
					<th>Tanggal Berakhir</th>
					<th>Tempat Kegiatan</th>
					<th>Deskripsi Kegiatan</th>
					<th>Status Kegiatan</th>
					<th>Foto Kegiatan</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor = 1; ?>
				<?php foreach($semuadata as $key => $value): ?>
				<tr>
					<td><?= $nomor; ?></td>
					<td><?= $value['nama_kegiatan']; ?></td>
					<td><?= $value['waktu_kegiatan']; ?></td>
					<td><?= $value['tanggal_berakhir']; ?></td>
					<td><?= $value['tempat_kegiatan']; ?></td>
					<td><?= $value['deskripsi_kegiatan']; ?></td>
					<td><?= $value['status_kegiatan']; ?></td>
					<td>
						<img src="../foto_kegiatan/<?php echo $value['foto_kegiatan']; ?>" width="100">
					</td>
					<td>
						<a href="index.php?halaman=viewkegiatan&id=<?= $value['kegiatan_id']; ?>" class="btn btn-info btn-xs">View</a>
						<a href="index.php?halaman=ubahkegiatan&id=<?= $value['kegiatan_id']; ?>" class="btn btn-warning btn-xs">Ubah</a>
						<a href="index.php?halaman=hapuskegiatan&id=<?= $value['kegiatan_id']; ?>" class="btn-danger btn-xs">Hapus</a>
					</td>			
				</tr>
				<?php $nomor++; ?>
			</tbody>
			<?php endforeach ?>
	</table>

</div>
</body>
</html>