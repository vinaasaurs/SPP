<?php
session_start();

if(empty($_SESSION['nisn'])){
    echo "<script> alert ('Maaf Anda Perlu Login Terlebih Dahulu'); 
       window.location.assign('../index.php');
       </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISWA</title>
    <link href = "../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h3>APLIKASI PEMBAYARAN SPP</h3>
        <div class="alert alert-info">
            Anda Login Sebagai siswa <b><?=  $_SESSION['nama_siswa']?></b> Aplikasi Pembayaran SPP.
        </div>
        <a href="siswa.php" class="btn btn-primary">Siswa</a>
        <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!--isi web nd kene-->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo "<h4>Selamat Datang Di Halaman Siswa</h4>";
                    echo "Pembayaran SPP digunakan untuk mempermudah  dalam mencatat pembayaran siswa / siswi di sekolah";
                    echo "<hr>";
                    include 'history-bayar.php';
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>