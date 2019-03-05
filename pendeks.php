<?php include ('header2.php') ?>
<br><div class="box-form">
  <div class="title-form">Formulir Pendaftaran Ekstrakulikuler</div>
<form action="" method="POST">
<div class="col-md-12 mb-3">
     <br> <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" value="" required>
    </div>
    <div class="form-row" style="margin:9px;">
    <div class="form-group col-md-6">
      <label>Nama Depan</label>
      <input type="text" name="depan" class="form-control" placeholder="Nama Depan" value="" required>
    </div>
    <div class="form-group col-md-6">
      <label>Nama Belakang</label>
      <input type="text" name="belakang" class="form-control" placeholder="Nama Depan" value="" required>
    </div>
  </div>
   <div class="form-row" style="margin:9px;">
    <div class="form-group col-md-6">
      <label>Kelas</label>
      <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="" required>
    </div>
    <div class="form-group col-md-6">
      <label>Absen</label>
      <input type="text" name="absen" class="form-control" placeholder="Absen" value="" required>
    </div>
  </div>
    <div class="col-md-12 mb-3">
      <label>Ekstrakulikuler</label>
      <input type="textarea" name="ekstrakulikuler" class="form-control" placeholder="Ekstrakulikuler" value="" required>
    </div>
  <br><center><button type="submit" name="simpan" class="btn btn-success" value="Simpan">submit</button></center></br>
</form>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO tabel_anggota VALUES
                        ('".$_POST['username']."',
                        '".$_POST['depan']."',
                        '".$_POST['belakang']."',
                        '".$_POST['kelas']."',
                        '".$_POST['absen']."',
                        '".$_POST['ekstrakulikuler']."')");
}
?>
<?php include ('footer.php') ?>