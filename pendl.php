<?php include ('header2.php') ?>
<br><div class="box-form">
<div class="title-form">Formulir Pendaftaran Lomba Ekstrakulikuler</div>
<form action="" method="POST">
  <div class="col-md-12 mb-3">
        <input type="hidden" name="id_lomba" class="form-control">
    </div>
<div class="col-md-12 mb-3">
     <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" value="" required>
    </div>
   <div class="form-row" style="margin:9px;">
    <div class="form-group col-md-6">
      <label>Nama Depan</label>
      <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan" value="" required>
    </div>
    <div class="form-group col-md-6">
      <label>Nama Belakang</label>
      <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Depan" value="" required>
    </div>
  </div>
   <div class="form-row" style="margin:9px;">
    <div class="form-group col-md-6">
      <label>Agama</label>
      <input type="text" name="agama" class="form-control" placeholder="Agama" value="" required>
    </div>
    <div class="form-group col-md-6">
      <label>TTL</label>
      <input type="text" name="ttl" class="form-control" placeholder="Tempat/Tanggal/Lahir" value="" required>
    </div>
  </div>
    <div class="col-md-12 mb-3">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" placeholder="Alamat" value required>
    </div>
    <div class="col-md-12 mb-3">
      <label>Lomba</label>
      <input type="text" name="lomba" class="form-control" placeholder="Lomba" value required>
    </div>
  <br><center><button type="submit" name="simpan" class="btn btn-success" value="Simpan">submit</button></center></br>
</form>
</div></br>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO tabel_lomba VALUES
                        ('".$_POST['id_lomba']."',
                        '".$_POST['username']."',
                        '".$_POST['nama_depan']."',
                        '".$_POST['nama_belakang']."',
                        '".$_POST['agama']."',
                        '".$_POST['ttl']."',
                        '".$_POST['alamat']."',
                        '".$_POST['lomba']."')");
}
?>
<?php include ('foter.php') ?>