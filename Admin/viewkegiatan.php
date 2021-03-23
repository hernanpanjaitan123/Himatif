<center><strong><h2>View Detail</h2></strong></center>


<?php 

$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE kegiatan_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<div class="x_content">
    <h2><strong><?php echo $pecah['nama_kegiatan']; ?></strong></h2>
    <form class="form-horizontal form-label-left" novalidate>
        <table class="table table-striped projects">
            <!-- <tr>
                <td style="width: 20%"><strong>Nama Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['nama_kegiatan']; ?></strong></td>
            </tr> -->
            <tr>
                <td style="width: 20%"><strong>Waktu Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>   
                <td><strong><?php echo $pecah['waktu_kegiatan']; ?></strong></td>
            </tr>
             <tr>
                <td style="width: 20%"><strong>Berakhir Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['tanggal_berakhir']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Tempat Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['tempat_kegiatan']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Deskripsi Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['deskripsi_kegiatan']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Foto Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><img src="../foto_kegiatan/<?php echo $pecah['foto_kegiatan'] ?>" width="200"></strong></td>
            </tr>
             <tr>
                <td style="width: 20%"><strong>Status Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['status_kegiatan']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Penulis Kegiatan</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['penulis']; ?></strong></td>
            </tr>

        </table>
    </form>

</div>


<a href="index.php?halaman=ubahkegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn btn-primary"> Ubah</a>
<a href="index.php?halaman=hapuskegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn-danger btn">Hapus</a>