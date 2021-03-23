<?php 
session_start();
// var_dump($_SESSION['periode']);
// die();
$koneksi = new mysqli("localhost", "root", "", "himatif1");

	if (isset($_POST['save']))
	{
		$periode = explode("|", $_POST['periode']);

		$mahasiswa = $_POST['mahasiswa'];
		$jabatan = $_POST['jabatan'];
		$sql = "INSERT INTO bph (periode_id, mahasiswa_id, jabatan)VALUES ('$periode[0]', '$mahasiswa', '$jabatan')";

		if ($koneksi->query($sql) === TRUE) {
			//echo "<div class='alert alert-info'>Data Tersimpan</div>";
			echo "<meta http-equiv='refresh' content='1;url=../index.php?halaman=detailperiode&periode=$periode[1]'>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}



	}
?>