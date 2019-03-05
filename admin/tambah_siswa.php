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
<h2 style="margin:2%;"><center>Add Data Siswa</center></h2>
<div class="box-form">
<form action="" method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <center><input type="hidden" name="id_siswa" placeholder="id siswa"></center>
        <label>Nama Siswa</label></br>
        <center><input type="text" name="nama_siswa" placeholder="nama siswa" value="" required></center>
        <label>Id Kelas</label></br>
         <select type="text" name="id_kelas" style="width: 300px;padding: 14px 10px;border-radius: 5px 5px 5px 5px;;border: 1px solid #808080;">
    <?php include('koneksi.php');
    $sql="SELECT * FROM tabel_kelas";
    $kelas=mysqli_query($conn,$sql);
    while($baris=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
    <option value="<?php echo $baris ['id_kelas'];?>"><?php echo $baris ['nama_kelas'];?></option>
    <?php } ?>
  </select>
        <br><label>Username</label></br>
        <center><input type="text" name="username" placeholder="username" value="" required></center>
        <label>Password</label></br>
        <center><input type="text" name="password" placeholder="password" value="" required></center>
        <br><center><button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_siswa.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO tabel_siswa VALUES
                        (
                        '".$_POST['id_siswa']."',
                        '".$_POST['nama_siswa']."',
                        '".$_POST['id_kelas']."',
                        '".$_POST['username']."',
                        '".$_POST['password']."')");
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
<?php include ('footer.php');?>