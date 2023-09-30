<?php
$username= $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_petugas'];
$level = $_POST['level'];
include '../koneksi.php';

$sql = "INSERT INTO petugas(username,password,nama_petugas,level) VALUES('$username','$password','$nama','$level')";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=petugas');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=petugas');
    </script>";
}
?>