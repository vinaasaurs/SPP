<h5>Halaman Data Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">KEMBALI</a>
<hr>

<form method = "post" action="?url=proses-tambah-kelas">
    <div class="form-group mb-2">
         <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Jurusan</label>
        <input type="text" name="jurusan"  class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">RESET</button>
    </div>
</form>