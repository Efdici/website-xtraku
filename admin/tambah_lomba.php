<?php include ('heder.php');?>
<h2 style="margin:2%;"><center>Add Data Lomba</center></h2>
<div class="box-form">
<form action="" method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <center><input type="hidden" name="id_lomba"></center>
        <label>Nama Lomba</label></br>
        <center><input type="text" name="nama_lomba" placeholder="nama lomba" value="" required></center>
         <label>Deskripsi</label></br>
        <center><input type="text" name="deskripsi" placeholder="deskripsi" value="" required></center>
         <label>Gambar</label></br>
        <center><input type="text" name="gambar" placeholder="gambar" value="" required></center>
        <br><center><button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_lomba.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO tabel_lomba VALUES
                        (
                        '".$_POST['id_lomba']."',
                        '".$_POST['nama_lomba']."',
                        '".$_POST['deskripsi']."',
                        '".$_POST['gambar']."')");
if ($insert) {
    echo 'success';
}else{
    echo 'gagal disimpan',mysqli_error($conn);
}
}
?>
<?php include ('footer.php');?>