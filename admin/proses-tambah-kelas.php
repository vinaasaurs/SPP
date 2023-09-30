<?php
$nama_kelas = $_POST['nama_kelas'];
$jurusan = $_POST['jurusan'];

include '../koneksi.php';

$sql = "INSERT INTO kelas (nama_kelas,jurusan) VALUES('$nama_kelas','$jurusan')";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=kelas');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=kelas');
    </script>";
}
?>