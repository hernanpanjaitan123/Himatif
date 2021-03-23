<h2>Tambah Data BPH</h2>

<form action="proses/tambahpengurus.php" method="post" enctype="multipart/form-data">
<div class="form-group">
		<label>Periode</label>
		<select name="periode" id="oeriode" class="form-control" required>
			<option value="">-Pilih-</option>

			<?php $ambil=$koneksi->query("SELECT * FROM periode"); 
			$periode = $_GET['periode'];?>
			<?php while($pecah = $ambil->fetch_assoc()){ 
				echo '<option value = "'. $pecah['periode_id']."|".$pecah['periode_awal'].'">'.$pecah['periode_awal'].'</option>';	
			}?>
			 		</select>
	</div>
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<select name="mahasiswa" id="mahasiswa" class="form-control" required>
			<option value="">-Pilih-</option>
			<?php $ambil=$koneksi->query("SELECT * FROM mahasiswa"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ 
				echo '<option value = "'. $pecah['mahasiswa_id'].'">'.$pecah['nama'].'</option>';	
			}?>
			 		</select>
	</div>
	
	<div class="form-group">
		<label>Jabatan</label>
		<select class="form-control" name="jabatan" required="required">
			<option value="">--Pilih Jabatan--</option>
			<option value="Ketua">Ketua</option>
			<option value="waket">Wakil Ketua</option>
			<option value="bendahara">Bendahara</option>
			<option value="sekretaris">Sekretaris</option>
			<option value="divac">Divisi Acara</option>
			<option value="divpeng">Divisi Pengajaran</option>
			<option value="sarpras">Sarana Prasarana</option>
			<option value="humas">Humas</option>
			

		</select>
	</div>


	<button class="btn btn-primary" name="save">Simpan</button>
</form>


