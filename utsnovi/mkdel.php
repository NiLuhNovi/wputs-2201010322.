<?php
$sks = $_GET["p1"];
$sql = "SELECT * FROM tbmk";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
<h3>Hapus Data Mahasiswa <?=$h["kodematkul"]?></h3>
<form method="POST" action="datamatakuliah.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="sks" value="<?=$sks?>">
    <div class="form-floating mb-3">
    <div class="form-floating mb-3">
            <input type="text" name="txKODE" class="form-control" id="floatingInputKODE" placeholder="kodematkul" value="<?= $h["kodematkul"] ?>">>
            <label for="floatingInputKoDE">Kode MataKuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txMK" class="form-control" id="floatingInputMK" placeholder="matakuliah" value="<?= $h["matakuliah"] ?>">>
            <label for="floatingInputMK">Matakuliah</label>
        </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSKS" class="form-control" id="floatingInputSKS" placeholder="sks"value="<?= $h["sks"] ?>">>
        <label for="floatingInputSKS">SKS</label>
    </div>

    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-danger"> Hapus Data Mahasiswa</button>
    <a href="datamatakuliah.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    }else{
        echo "<script>window.location.href='datamatakuliah.php';</script>";
    }
?>