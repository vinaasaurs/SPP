<?php
$id_bayar = $_GET['id_pembayaran'];

include '../koneksi.php';

$sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id_bayar'";
$query = mysqli_query($conn, $sql);
if($query){
    header('Location:?url=pembayaran');
}else{
    echo "<script>window.history.go(-1);</script>";
}else{
    echo "<script>alert('Data tidak terhapus'); window.history.go(-1)('?url=pembayaran');
    </script>";
}
?>