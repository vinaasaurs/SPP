<?php
$nisn= $_POST['nisn'];
$nis= $_POST['nis'];
$nama= $_POST['nama_siswa'];
$id_kls= $_POST['id_kelas'];
$alamat= $_POST['alamat'];
$telp= $_POST['telp'];
$id_spp= $_POST['id_spp'];

include '../koneksi.php';

$sql = "INSERT INTO siswa(nisn,nis,nama_siswa,id_kelas,alamat,telp,id_spp) VALUES ('$nisn','$nis','$nama','$id_kls','$alamat'
,'$telp','$id_spp')";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=siswa');
    </script>";
}
?>