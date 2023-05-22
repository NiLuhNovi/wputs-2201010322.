<?php
$sks = $_GET["p1"];
$sql = "SELECT * FROM tbmk WHERE sks='$sks'"; 
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>

<h3>Ubah Data Matakuliah <?= $h["kodematkul"] ?></h3>
<form method="POST" action="datamatakuliah.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="sks" value="<?= $sks ?>"> 
    <div class="form-floating mb-3">
        <input type="text" name="txKODE" class="form-control" id="floatingInputKODE" placeholder="kodematkul" value="<?= $h["kodematkul"] ?>">
        <label for="floatingInputKODE">Kode MataKuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txMK" class="form-control" id="floatingInputMK" placeholder="matakuliah" value="<?= $h["matakuliah"] ?>">
        <label for="floatingInputMK">Matakuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSKS" class="form-control" id="floatingInputSKS" placeholder="sks" value="<?= $h["sks"] ?>">
        <label for="floatingInputSKS">SKS</label>
    </div>

    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Ubah Data Matakuliah</button>
    <a href="datamatakuliah.php" class="btn btn-secondary">Batal</a>
</form>

<?php
} else {
    echo "<script>window.location.href='datamatakuliah.php';</script>";
}
?>
