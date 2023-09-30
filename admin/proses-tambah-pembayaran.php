<?php
$id_petugas = $_SESSION=['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_bayar= $_POST['bulan_bayar'];
$tahun_bayar= $_POST['tahun_bayar'];
$id_spp = $_POST['id_spp'];
$jumlah = $_POST['jumlah_bayar'];

include '../koneksi.php';

$sql = "INSERT INTO pembayaran(id_petugas,nisn,tgl_bayar,bulan_bayar,tahun_bayar,id_spp,jumlah_bayar)
 VALUES('$id_petugas','$nisn','$tgl_bayar','$bulan_bayar','$tahun_bayar','$id_spp','$jumlah')";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=pembayaran');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=pembayaran');
    </script>";
}
?>