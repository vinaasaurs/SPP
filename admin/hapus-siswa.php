<?php
$nisn= $_GET['nisn'];

include '../koneksi.php';

$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=siswa');
}else{
    echo "<script>alert('Data tidak terhapus');
    window.location.assign('?url=siswa');
    </script>";
}
?>