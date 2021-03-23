<?php
    include "koneksi.php";
    include "ExcelReader/excel-reader.php";
    
    if ($_POST['upload'] == "upload") {
        $type         =explode(".",$_FILES['namafile']['name']);
        
        if (empty($_FILES['namafile']['name'])) {
            ?>
                <script language="JavaScript">
                    alert('Oops! Please fill all / select file ...');
                    document.location='./';
                </script>
            <?php
        }
        else if(strtolower(end($type)) !='xls'){
            ?>
                <script language="JavaScript">
                    alert('Oops! Please upload only Excel XLS file ...');
                    document.location='./';
                </script>
            <?php
        }
        
        else{
        $target = basename($_FILES['namafile']['name']) ;
        move_uploaded_file($_FILES['namafile']['tmp_name'], $target);
    
        $data    =new Spreadsheet_Excel_Reader($_FILES['namafile']['name'],false);
    
        $baris = $data->rowcount($sheet_index=0);
    
        for ($i=11; $i<=$baris; $i++){
            $username     = $data->val($i, 1);
            $password   = $data->val($i, 2);
            $nama  = $data->val($i, 3);
            $nim  = $data->val($i, 4);
            $angkatan  = $data->val($i, 5);
            $kelas  = $data->val($i, 6);
            $alamat  = $data->val($i, 7);
            $email  = $data->val($i, 8);
            $status_mahasiswa  = $data->val($i, 9);
            $tempat_lahir  = $data->val($i, 10);
            $tanggal_lahir  = $data->val($i, 11);
            $role  = $data->val($i, 12);

            $query = mysql_query("INSERT INTO mahasiswa (mahasiswa_id, username, password,nama,nim,angkatan,kelas,alamat,email,status_mahasiswa,tempat_lahir,tanggal_lahir,role) VALUES ('$mahasiswa_id','$username','$password','$nama','$nim','$angkatan','$kelas','$alamat','$email','$status_mahasiswa','$tempat_lahir','$tanggal_lahir','$role')");        
        }
    
            if(!$query){
                ?>
                    <script language="JavaScript">
                        alert('<b>Oops!</b> 404 Error Server.');
                        document.location='./';
                    </script>
                <?php
            }
            else{
                ?>
                    <script language="JavaScript">
                        alert('Good! Import Excel XLS file success...');
                        document.location='./';
                    </script>
                <?php
            }
        unlink($_FILES['namafile']['name']);
        }
    }
?>