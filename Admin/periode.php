<h2>Periode Himatif</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Periode Awal</th>
			<th>Periode Akhir</th>
		
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM periode"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><a href=<?='"index.php?halaman=detailperiode&periode='.$pecah['periode_awal'].'&id='.$pecah['periode_id']. '"'; ?>>
				<?php echo $pecah['periode_awal']; ?></td></a>
		
			<td><?php echo $pecah['periode_akhir']; ?></td>
			
		</tr>
		<?php $nomor++; ?>
		<?php }  ?>

	</tbody>
	
</table>
<a href="index.php?halaman=tambahperiode" class="btn btn-primary ">Tambah Periode</a>

