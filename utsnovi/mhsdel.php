<?php
$id = $_GET["p1"];
$sql = "SELECT * FROM tbmhs";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
<h3>Hapus Data Mahasiswa <?=$h["nama"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="id" value="<?=$id?>">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim" value="<?=$h["nim"]?>">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJURUSAN" class="form-control" id="floatingInput" placeholder="jurusan" value="<?=$h["jurusan"]?>">
        <label for="floatingInput">JURUSAN</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="Alamat" value="<?=$h["alamat"]?>">
        <label for="floatingInput">ALAMAT</label>
    </div>

    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-danger"> Hapus Data Mahasiswa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    }else{
        echo "<script>window.location.href='datamahasiswa.php';</script>";
    }
?>