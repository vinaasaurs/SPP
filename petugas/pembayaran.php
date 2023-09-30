
<h5>Halaman Data Pembayaran Siswa</h5>

<hr>

<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>NO</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Kekurangan</td>
        <td>Status</td>
        <td>History</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp
    ORDER BY nama_siswa ASC";
    $query = mysqli_query($conn,$sql);
    foreach($query as $data){ 
        $data_pembayaran = mysqli_query($conn, "SELECT SUM(jumlah_bayar) as jumlah_bayar FROM
        pembayaran WHERE nisn='$data[nisn]'");
        $data_pembayaran= mysqli_fetch_array($data_pembayaran);
        $sdh_byr=$data_pembayaran['jumlah_bayar'];
        $kurang= $data['nominal']-$data_pembayaran['jumlah_bayar']; 
        ?>
    <tr>
        <td><?= $no++;?></td>
        <td><?= $data['nisn']?></td>
        <td><?= $data['nama_siswa']?></td>
        <td><?= $data['nama_kelas']?></td>
        <td><?= $data['tahun']?></td>
        <td><?= number_format($data['nominal'],2,',','.');?></td>
        <td><?= number_format($sdh_byr,2,',','.');?></td>
        <td><?= number_format($kurang,2,',','.');?></td>
        <td>
           <?php 
           if($kurang == 0){
            echo "<span class = 'badge text-bg-success'> Sudah Lunas</span>";
           }else{?>
             <a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kurang ?>"
             class = "btn btn-warning">Pilih Bayar</a>
          <?php } ?>
        </td>
        <td>
            <a href="?url=history-bayar&nisn=<?= $data['nisn']?>" class="btn btn-danger">History</a>
        </td>
    </tr>
    <?php } ?>

</table>