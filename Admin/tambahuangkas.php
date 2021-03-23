<?php

  require_once 'koneksi.php';
  $query = "SELECT * FROM mahasiswa ";
  $result = mysqli_query($koneksi, $query);
 ?>
<h2>Silahkan Menambah Uang Kas</h2>

<form action="proses/tambahuangkas.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Jumlah Pembayaran</label>
		<input type="text" class="form-control" name="jumlah">
	</div>
	
	<div class="col-md-6">
		<label>Tanggal Dibuat</label>
		<input type="date" class="form-control" name="awal">
	</div>
	<div class="col-md-6">
		<label>Tanggal Berakhir</label>
		<input type="date" class="form-control" name="akhir">
	</div>


	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>

	<div class="form-group">
		<label>Status Pembayaran</label>
		<select class="form-control" name="status">
			<option value="">--Pilih Status--</option>
			<option value="Sudah Bayar">Sudah Bayar</option>
			<option value="Belum Bayar">Belum Bayar</option>
		</select>
	</div>	
	<div class="form-group">
		<label>Nama Pembayar</label>
		<select name="mahasiswa">
			<?php while($data = mysqli_fetch_array($result) ){?>
  				<option value="<?=$data['mahasiswa_id'] . '|' . $data['nama']?>"><?=$data['nama']?></option> 
  			<?php } ?>	
		</select>
	</div>

		

	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>	

