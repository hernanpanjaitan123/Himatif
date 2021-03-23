<h2>Update Data Mahasiswa</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM uang_kas WHERE uang_kas_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>		

<br></br>
<?php

  require_once 'koneksi.php';
  $query = "SELECT * FROM mahasiswa ";
  $result = mysqli_query($koneksi, $query);
 ?>

<form action="proses/ubahuangkas.php?id_uang_kas=<?php echo $pecah['uang_kas_id']?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Jumlah Bayar</label>
		<input type="text" class="form-control" name="jumlah" value="<?php echo $pecah['jumlah_bayar']; ?>">
	</div>

	<div class="col-md-6">
		<label>Tanggal Dibuat</label>
		<input type="date" class="form-control" name="awal" value="<?php echo $pecah['tanggal_dibuat']; ?>">
	</div>
	<div class="col-md-6">
		<label>Tanggal Berakhir</label>
		<input type="date" class="form-control" name="akhir" value="<?php echo $pecah['tanggal_berakhir']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10" >
			<?php echo $pecah['deskripsi_pembayaran']; ?>
		</textarea>
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



