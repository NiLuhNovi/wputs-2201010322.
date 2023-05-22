<?php
$id = $_GET["p1"];
$sql = "SELECT * FROM tbmhs WHERE id='$id'"; 
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Ubah Data Mahasiswa <?= $h["id"] ?></h3>
    <form method="POST" action="datamahasiswa.php">
        <input type="hidden" name="act" value="update">
        <input type="hidden" name="id" value="<?= $id ?>"> 
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="nama" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="txNIM" class="form-control" id="floatingInput" placeholder="nim" value="<?= $h["nim"] ?>">
            <label for="floatingInput">NIM</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txJURUSAN" class="form-control" id="floatingInput" placeholder="jurusan" value="<?= $h["jurusan"] ?>">
            <label for="floatingInput">JURUSAN</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="alamat" value="<?= $h["alamat"] ?>">
            <label for="floatingInput">ALAMAT</label>
        </div>

        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data Mahasiswa</button>
        <a href="datamahasiswa.php" class="btn btn-secondary">Batal</a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datamahasiswa.php';</script>";
}
?>
