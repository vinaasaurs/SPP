<?php
$id_petugas = $_GET['id_petugas'];
$username= $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_petugas'];
$level = $_POST['level'];
include '../koneksi.php';

$sql = "UPDATE petugas SET username='$username',password='$password',nama_petugas='$nama',level='$level'
WHERE id_petugas='$id_petugas'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=petugas');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=petugas');
    </script>";
}
?>