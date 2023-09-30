<?php
$id_kelas = $_GET['id_kelas'];

include '../koneksi.php';

$sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=kelas');
}else{
    echo "<script>alert('Data tidak terhapus');
    window.location.assign('?url=kelas');
    </script>";
}
?>