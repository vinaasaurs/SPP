<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo "<script> alert ('Maaf Anda Perlu Login Terlebih Dahulu'); 
       window.location.assign('../index2.php');
       </script>";
}
if($_SESSION['level']!=='petugas'){
 echo "<script> alert ('Maaf Anda Bukan Sesi Admin'); 
    window.location.assign('../index2.php');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
    <link href = "../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h3>APLIKASI PEMBAYARAN SPP</h3>
        <div class="alert alert-info">
            Anda Login Sebagai Petugas <b><?=$_SESSION['nama_petugas']?></b> Aplikasi Pembayaran SPP.
        </div>
        <a href="petugas.php" class="btn btn-primary">Petugas</a>
        <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
        <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!--isi web nd kene-->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo "<h4>Selamat Datang Di Halaman Administrator</h4>";
                    echo "Pembayaran SPP digunakan untuk mempermudah  dalam mencatat pembayaran siswa / siswi di sekolah";
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>