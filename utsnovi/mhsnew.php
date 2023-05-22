<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInputNama" placeholder="Nama Lengkap">
        <label for="floatingInputNama">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInputNIM" placeholder="NIM" >
        <label for="floatingInputNIM">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJURUSAN" class="form-control" id="floatingInputJurusan" placeholder="Jurusan">
        <label for="floatingInputJurusan">Jurusan</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInputAlamat" placeholder="Alamat">
        <label for="floatingInputAlamat">Alamat</label>
    </div>
   
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Buat Data Mahasiswa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary">Batal</a>
</form>
