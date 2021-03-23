<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>Data Upload</title>
</head>
<body>
	<center>
		<h1>Upload Data Mahasiswa</h1>
		<form method="post" enctype="multipart/form-data" action="uploader.php">
		<b>Impor Data Mahasiswa :</b>
		<input type="file" name="data_mahasiswa" required="required">
		<input type="submit" name="upload" value="Upload">	
		</form>

    <?php 
        if(isset($_GET['upload']))
        {
            if ($_GET['upload']=="success")
            {
               echo "<h3>Data berhasil diupload!</h3>";
            }
            else
            {
                echo "<h3>Data gagal diupload!</h3>";
            }
        }        	
    ?>    	
		<br><br>
		<table border="1">
			<tr>
				<th>No</th>
                <th>Nama</th>
				<th>Username</th>
				<th>Password</th> 
				<th>Nim</th>
				<th>Angkatan</th>
				<th>Kelas</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Status Mahasiswa</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Role</th>
                <th>Foto Mahasiswa</th>
			</tr>
			<?php 
				include_once ('connect.php');
				$no=1;
				$data_mahasiswa = mysqli_query($connect,"SELECT * FROM mahasiswa");
				while($data = mysqli_fetch_array($data_mahasiswa))
				{
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['password']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['nim']; ?></td>
						<td><?php echo $data['angkatan']; ?></td>
					 	<td><?php echo $data['kelas']; ?></td>
						<td><?php echo $data['alamat']; ?></td> 
						<td><?php echo $data['email'];?></td>
						<td><?php echo $data['status_mahasiswa']; ?></td>
						<td><?php echo $data['tempat_lahir']; ?></td>
						<td><?php echo $data['tanggal_lahir']; ?> </td>
					    <td><?php echo $data['role']; ?></td>
                         <td><?php echo $data['foto_mahasiswa']; ?></td>
					</tr>
		    <?php 
			}
			?>
		</table>

		<br><br><br>
		<a href="../admin/index.php?halaman=mahasiswa"><button class="btn btn-info">Back To HIMATIF</button></a>
	</center>
</body>
</html>