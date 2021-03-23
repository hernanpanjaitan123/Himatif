<h2>View Mahasiswa</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE mahasiswa_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>
 <div class="row">
    <div class="col-md-6">
        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?php echo $pecah['nama'] ?></td>
            </tr>
            <tr>
                <th>Nim</th>
                <td><?php echo $pecah['nim'] ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?php echo $pecah['kelas'] ?></td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <td><?php echo $pecah['angkatan'] ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $pecah['alamat'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $pecah['email'] ?></td>
            </tr>
            <tr>
                <th>Status Mahasiswa</th>
                <td><?php echo $pecah['status_mahasiswa'] ?></td>
            </tr>
            <tr>
                <th>Tanggal/Tanggal Lahir</th>
                <td><?php echo $pecah['tempat_lahir']?>,<?php echo $pecah['tanggal_lahir']?></td>
            </tr>       
        </table>
    </div>
    <div class="col-md-6">
        <img src="../foto_mahasiswa/<?php echo $pecah['foto_mahasiswa'] ?>" alt="" class="img-responsive">
    </div>
</div>
