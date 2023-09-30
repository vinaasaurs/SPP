<?php
$id_kelas = $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$jurusan = $_POST['jurusan'];

include '../koneksi.php';

$sql = "UPDATE kelas SET nama_kelas='$nama_kelas', jurusan='$jurusan' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=kelas');
}else{
    echo "<script>alert('Data tidak tersimpan');
    window.location.assign('?url=kelas');
    </script>";
}
?>