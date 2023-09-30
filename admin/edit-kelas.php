<?php
$id_kelas = $_GET['id_kelas'];
include '../koneksi.php';
$sql = "SELECT * FROM kelas WHERE id_kelas='$id_kelas'";
    $query = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">KEMBALI</a>
<hr>

<form method = "post" action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>">
    <div class="form-group mb-2">
         <label>Nama Kelas</label>
        <input value = "<?= $data['nama_kelas']?>" type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Jurusan</label>
        <input value = "<?= $data['jurusan']?>" type="text" name="jurusan"  class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">RESET</button>
    </div>
</form>