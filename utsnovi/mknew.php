<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamatakuliah.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txKODE" class="form-control" id="floatingInputKODE" placeholder="kodematkul">
        <label for="floatingInputKoDE">Kode MataKuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txMK" class="form-control" id="floatingInputMK" placeholder="matakuliah" >
        <label for="floatingInputMK">Matakuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSKS" class="form-control" id="floatingInputSKS" placeholder="sks">
        <label for="floatingInputSKS">SKS</label>
    </div>
   
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Buat Data Mahasiswa</button>
    <a href="datamatakuliah.php" class="btn btn-secondary">Batal</a>
</form>
