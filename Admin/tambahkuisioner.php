<h2>Tambahkan Kuisioner</h2>

<form method="post" enctype="multipart/form-data">
	<!-- <div class="form-group">
		<label>
		<input type="text" class="form-control" name="nama">	
		</label>
	</div> -->
	<div class="form-group">
		<label>Judul Kuisioner</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea class="form-control" name="keterangan" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Intruksi Kuisioner</label>
		<textarea class="form-control" name="intruksi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Tanggal View</label>
		<input type="date" class="form-control" name="view">
	</div>
	<div class="form-group">
		<label>Tanggal Berakhir</label>
		<input type="date" class="form-control" name="berakhir">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 

	if (isset($_POST['save']))
	{
		$bphQuery = $koneksi->query("SELECT * FROM bph WHERE mahasiswa_id = " . $_SESSION['mahasiswa']['mahasiswa_id']);
		$bph=$bphQuery->fetch_assoc();

		$koneksi->query("INSERT INTO kuisioner
			(judul_kuisioner,keterangan_kuisioner,intruksi_kuisioner,tanggal_view,tanggal_berakhir, bph_id)
			VALUES('$_POST[judul]', '$_POST[keterangan]','$_POST[intruksi]','$_POST[view]', '$_POST[berakhir]','$bph[bph_id]' )");

		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kuisioner'>";	
	}	
	
?>