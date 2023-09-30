<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pembayaran SPP</title>
    <link href = "assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN SISWA</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo.jpeg" width="100%">
                    </div>
                    <div class="card-body">
                        <form action="login_siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN anda.." required>
                            </div>
                            <div class="form-group mb-2">
                                <label>NIS</label>
                                <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS anda.." required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </div>
                            <a href="index2.php">LOGIN SEBAGAI SEBAGAI ADMIN/PETUGAS</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>