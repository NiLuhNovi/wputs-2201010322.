<h3>Daftar mahasiswa</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Mata Kuliah</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Sks</th>
      <th scope="col"><a href="datamatakuliah.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
<?php
  $sql = "SELECT * FROM tbmk ";
  $hasil = mysqli_query($cnn, $sql);
  
  $cx = 0;
    while($h = mysqli_fetch_assoc($hasil)){
    $cx++;
?>    
    <tr>
      <th scope="row"><?=$cx?></th>
      <td><?=$h["kodematkul"]?></td>
      <td><?=$h["matakuliah"]?></td>
      <td><?=$h["sks"]?></td>

      <td><a href="datamatakuliah.php?aksi=edit&p1=<?=$h["sks"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
      <a href="datamatakuliah.php?aksi=del&p1=<?=$h["sks"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
