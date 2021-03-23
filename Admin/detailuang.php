<h2>Detail Uangkas</h2>


<?php 

$ambil = $koneksi->query("SELECT u.uang_kas_id,u.bph_id,u.periode_id,u.jumlah_bayar,u.tanggal_bayar,u.tanggal_berakhir,u.deskripsi_pembayaran,u.status_pembayaran,u.mahasiswa_id,m.nama FROM uang_kas u inner join mahasiswa m on u.mahasiswa_id = m.mahasiswa_id WHERE uang_kas_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>


<div class="x_content">
    <h2><strong><?php echo $pecah['nama']; ?></strong></h2>
    <form class="form-horizontal form-label-left" novalidate>
        <table class="table table-striped projects">
            <tr>
                <td style="width: 20%"><strong>Jumlah</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
               <td>Rp. <?php echo $pecah['jumlah_bayar']; ?></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Tanggal Dibuat</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['tanggal_bayar']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Tanggal Berakhir</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['tanggal_berakhir']; ?></strong></td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Deskripsi</strong></td>
                <td style="width: 2%"><strong>:</strong></td>
                <td><strong><?php echo $pecah['deskripsi_pembayaran']; ?></strong></td>
            </tr>

        </table>
    </form>

</div>