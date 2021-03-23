<?php
include_once ('assets/excel_reader2.php');
include_once ('connect.php');


$target = basename($_FILES['data_mahasiswa']['name']);
move_uploaded_file($_FILES['data_mahasiswa']['tmp_name'],$target);


//permision agar file excel dapat dibaca
chmod($_FILES['data_mahasiswa']['name'],0777);


//mengambil isi dari file xls
$data = new Spreadsheet_Excel_Reader($_FILES['data_mahasiswa']['name'],false);


//hitung jumlah baris
$jumlah_baris = $data->rowcount($sheet_index=0);

$success = 0;
for ($i=1; $i<=$jumlah_baris; $i++) { 

	$nama  = $data->val($i, 1);
	$username     = $data->val($i, 2);
	$password   = $data->val($i, 3);
	$nim  = $data->val($i, 4);
	$angkatan  = $data->val($i, 5);
	$kelas  = $data->val($i, 6);
	$alamat  = $data->val($i, 7);
	$email  = $data->val($i, 8);
	$status_mahasiswa  = $data->val($i, 9);
	$tempat_lahir  = $data->val($i, 10);
	$tanggal_lahir  = $data->val($i, 11);
	$role  = $data->val($i, 12);
	$foto_mahasiswa = $data->val($i, 13);

	if ($nama != "" && $username != "") {
		$enc_password = md5($password);

		mysqli_query($connect, "INSERT INTO mahasiswa VALUES ('','$username','$enc_password','$nama','$nim','$angkatan','$kelas','$alamat','$email','$status_mahasiswa','$tempat_lahir','$tanggal_lahir','$role','$foto_mahasiswa') ");

		$success++;
	}
}

	unlink($_FILES['data_mahasiswa']['name']);

	if ($success > 0) 
	{
		header("location:index.php?upload=success");
	}
	else
	{
		header("location:index.php?upload=gagal");
	}


?>