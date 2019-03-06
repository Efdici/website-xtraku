<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$id_ekstra = $_GET['id_ekstra'];
$data_edit = mysqli_query($conn, "SELECT * FROM tabel_ekstrakulikuler WHERE id_ekstra = '$id_ekstra'");
$result = mysqli_fetch_array($data_edit)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Ekstrakulikuler</center></h2>
<div class="box-form">
<form method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <br><label>Nama Ekstrakulikuler</label>
        <center><input type="text" name="nama" placeholder="nama ekstrakulikuler" value="<?php echo $result['nama_ekstra'];?>" ></center>
        <label>Deskripsi</label>
        <center><input type="text" name="deskripsi" placeholder="deskripsi" value="<?php echo $result['deskripsi'];?>"></center>
        <label>Gambar</label>
        <center><input type="file" name="gambar" placeholder="gambar" value="<?php echo $result['gambar'];?>"></center>
        <label>Kategori</label>
        <center><input type="text" name="kategori" placeholder="kategori" value="<?php echo $result['kategori'];?>"></center>
        <label>Pembimbing</label>
        <center><input type="text" name="pembimbing" placeholder="pembimbing" value="<?php echo $result['nama_pembimbing'];?>"></center>
        <label>Anggota</label>
        <center><input type="text" name="anggota" placeholder="anggota" value="<?php echo $result['jumlah_anggota'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_ekstrakulikuler.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE tabel_ekstrakulikuler SET  nama_ekstra = '".$_POST['nama']."',deskripsi = '".$_POST['deskripsi']."',gambar = '".$_POST['gambar']."',kategori = '".$_POST['kategori']."',nama_pembimbing = '".$_POST['pembimbing']."',jumlah_anggota = '".$_POST['anggota']."'
        WHERE id_ekstra = '$id_ekstra'");
    if($update){
        echo 'success';
    }else{
        echo 'gagal edit';
    }
}
?>
</body>
</html>
<?php include ('foter.php');?>