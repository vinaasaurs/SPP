<?php
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'koneksi.php';
$sql = "SELECT * FROM siswa WHERE nisn='$nisn' AND nis='$nis'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query)>0){
    session_start();
    $data =  mysqli_fetch_array($query);
    $_SESSION['nama_siswa'] = $data['nama_siswa'];
    $_SESSION['nisn'] = $data['nisn'];

    header('Location: siswa/siswa.php');
}else{
    echo "<script> alert ('Maaf Coba Lagi');
    window.Location.assign('index.php');</script>";
}
?>