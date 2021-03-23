<h2>Penduduk</h2>
<?php 
$koneksi =  new mysqli("localhost","root","","andaliman_toba");
?>


<br></br>
<table class="table table-bordered">
	<thead>
		<tr>
			<!-- <th>no</th> -->
			<th>Nik</th>
			<th>Password</th>
			<th>KK</th>
			<th>email</th>
			<th>Nama</th>
			<th>No.Hp</th>
			<th>Jenis_Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>role</th>
			<th>Status_Penduduk</th>
			<th>Kelurahan</th>
			<th>Alamat</th>
			
		</tr>	
	</thead>
	<tbody>
		<!-- <?php $nomor=1; ?> -->
		<?php $ambil=$koneksi->query("SELECT * FROM penduduk"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<!-- <td><?php echo $nomor; ?></td> -->
			<td><?php echo $pecah['nik']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['no_KK']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['no_hp'];?></td>
			<td><?php echo $pecah['idjenis_kelamin'];?></td>
			<td><?php echo $pecah['tmpt_lahir'];?></td>
			<td><?php echo $pecah['tgl_lahir'];?></td>
			<td><?php echo $pecah['role_id'];?></td>
			<td><?php echo $pecah['idstatus_penduduk'];?></td>
			<td><?php echo $pecah['Desa_kel_id'];?></td>
			<td><?php echo $pecah['alamat'];?></td>
			
			
			<!-- <td><?php echo $pecah['penulis']; ?></td> -->
			
		</tr>
		<!-- <?php $nomor++; ?> -->
		<?php }  ?>

	</tbody>
</table>
