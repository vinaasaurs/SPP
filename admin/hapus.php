<?php
$id_spp = $_GET['id_spp'];

include '../koneksi.php';

$sql = "DELETE FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=spp');
}else{
    echo "<script>alert('Data tidak terhapus');
    window.location.assign('?url=spp');
    </script>";
}
?>