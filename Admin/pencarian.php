<?php
	include 'koneksi.php';
    if(isset($_POST['cari_mahasiswa']))
    {
        $_SESSION['pencarian_mahasiswa'] = $_POST['keyword'];
        $keyword = $_SESSION['pencarian_mahasiswa'];
    }else
    {
        $keyword = ['pencarian_mahasiswa'];
    }

    $ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%'OR angkatan LIKE '%$keyword%' ");
	$semuadata = array();
	while ($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
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
					<th>Username</th>
					<th>Password</th>
					<th>Nama</th>
					<th>Nim</th>
					<th>Kelas</th>
					<th>Angkatan</th>
					<th>Alamat</th>
					<th>Email Akademik</th>
					<th>Status Mahasiswa</th>
					<th>Tempat/Tanggal-Lahir</th>
					<th>Role</th>
					<th>Foto Mahasiswa</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor = 1; ?>
				<?php foreach($semuadata as $key => $value): ?>
				<tr>
					<td><?= $nomor; ?></td>
					<td><?= $value['username']; ?></td>
					<td><?= $value['password']; ?></td>
					<td><?= $value['nama']; ?></td>
					<td><?= $value['nim']; ?></td>
					<td><?= $value['angkatan']; ?></td>
					<td><?= $value['kelas']; ?></td>
					<td><?= $value['alamat']; ?></td>
					<td><?= $value['email'];?></td>
					<td><?= $value['status_mahasiswa']; ?></td>
					<td><?= $value['tempat_lahir'] ?>, <?= $pecah['tanggal_lahir']; ?> </td>
					<td><?= $value['role']; ?></td>
					<td>
						<img src="../foto_mahasiswa/<?php echo $value['foto_mahasiswa']; ?>" width="100">
					</td>	
					<td>
						<a href="index.php?halaman=viewmahasiswa&id=<?= $value['mahasiswa_id']; ?>" class="btn btn-info btn-xs">View</a>
						<a href="index.php?halaman=ubahmahasiswa&id=<?= $value['mahasiswa_id']; ?>" class="btn btn-warning btn-xs">Ubah</a>
						<a href="index.php?halaman=hapusmahasiswa&id=<?= $value['mahasiswa_id']; ?>" class="btn-danger btn-xs">Hapus</a>
					</td>			
				</tr>
				<?php $nomor++; ?>
			</tbody>
			<?php endforeach ?>
	</table>

	<a href="index.php?halaman=mahasiswa">back</a>

</div>
</body>
</html>