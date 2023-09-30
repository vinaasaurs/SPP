<?php
$nisn= $_GET['nisn'];
$nis= $_POST['nis'];
$nama= $_POST['nama_siswa'];
$id_kls= $_POST['id_kelas'];
$alamat= $_POST['alamat'];
$telp= $_POST['telp'];
$id_spp= $_POST['id_spp'];

include '../koneksi.php';

$sql = "UPDATE siswa SET nis='$nis', nama_siswa='$nama', id_kelas='$id_kls',alamat='$alamat',telp='$telp',id_spp='$id_spp' 
WHERE nisn='$nisn'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=siswa');
    </script>";
}
?>