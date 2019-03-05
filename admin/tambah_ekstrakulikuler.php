<?php include ('heder.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
<h2 style="margin: 2%;"><center>Add Data Ekstrakulikuler</center></h2>
<div class="box-form">
<form action="" method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <label>Id Ekstrakulikuler</label>
            <center><input type="text" name="id" placeholder="ID" value="" required></center>
        <label>Nama Ekstrakulikuler</label>
            <center><input type="text" name="nama" placeholder="Nama Ekstrakulikuler" value="" required></center>
        <label>Deskripsi</label>
            <center><input type="text" name="deskripsi" placeholder="Deskripsi" value="" required></center>
        <label>Gambar</label>
            <center><input type="file" name="image" placeholder="Gambar" value="" required></center>
        <label>Kategori</label>
            <center><input type="text" name="kategori" placeholder="Kategori" value="" required></center>
        <label>Nama Pembimbing</label>
            <center><input type="text" name="pembimbing" placeholder="Nama Pembimbing" value="" required></center>
        <label>Jumlah Anggota</label>
            <center><input type="text" name="anggota" placeholder="Jumlah Anggota" value="" required></center>
        <br><center><button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=index1.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO tabel_ekstrakulikuler VALUES
                        ('".$_POST['id']."',
                        '".$_POST['nama']."',
                        '".$_POST['deskripsi']."',
                        '".$_POST['image']."',
                        '".$_POST['kategori']."',
                        '".$_POST['pembimbing']."',
                        '".$_POST['anggota']."')");
    if ($insert) {
        echo 'success';
    }else{
        echo 'gagal disimpan',mysqli_error($conn);
    }
}
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
<?php include ('foter.php');?>