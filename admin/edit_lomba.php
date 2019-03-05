<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tabel_lomba WHERE id_lomba = '".$_GET['id']."'");
$result = mysqli_fetch_array($data_edit)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Lomba</center></h2>
<div class="box-form">
<form method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <br><label>Id Lomba</label>
        <center><input type="text" name="id_lomba" value="<?php echo $result['id_lomba'];?>" ></center>
        <label>Nama Lomba</label>
        <center><input type="text" name="nama_lomba" value="<?php echo $result['nama_lomba'];?>"></center>
        <label>Deskripsi</label>
        <center><input type="text" name="deskripsi" value="<?php echo $result['deskripsi'];?>"></center>
        <label>Gambar</label>
        <center><input type="text" name="gambar" value="<?php echo $result['gambar'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_lomba.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE tabel_lomba SET  nama_lomba = '".$_POST['nama_lomba']."', deskripsi = '".$_POST['deskripsi']."',
        gambar = '".$_POST['gambar']."'
        WHERE id_lomba = '".$_GET['id']."'");
    if($update){
        echo 'success';
    }else{
        echo 'gagal edit';
    }
}
?>
</body>
</html>
<?php include ('footer.php');?>