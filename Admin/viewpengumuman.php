<!-- <strong><h2>View Pengumuman</h2></strong>

 -->
<?php 

$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE pengumuman_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<div class="x_content">
    <h2><strong><?php echo $pecah['judul_pengumuman']; ?></strong></h2>
    <form class="form-horizontal form-label-left" novalidate>
        <table class="table table-striped projects">
            <tr>
                <td style="width: 20%"><strong>Judul Pengumuman</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['judul_pengumuman']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Foto Pengumuman</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><img src="../foto_pengumuman/<?php echo $pecah['foto_pengumuman'] ?>" width="200"></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Tanggal Berakhir</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['tanggal_akhir_pengumuman']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Detail Pengumuman</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['detail_pengumuman']; ?></strong></td>
            </tr>

            
        </table>
    </form>

</div>


<a href="index.php?halaman=ubahkegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn btn-primary"> Ubah</a>
<a href="index.php?halaman=hapuskegiatan&id=<?php echo $pecah['kegiatan_id']; ?>" class="btn-danger btn">Hapus</a>