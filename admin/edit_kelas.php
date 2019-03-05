<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tabel_kelas WHERE id_kelas = '".$_GET['id']."'");
$result = mysqli_fetch_array($data_edit)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Kelas</center></h2>
<div class="box-form">
<form method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <br><label>Id Kelas</label>
        <center><input type="text" name="id_kelas" placeholder="id kelas" value="<?php echo $result['id_kelas'];?>" ></center>
        <label>Nama Kelas</label>
        <center><input type="text" name="nama_kelas" placeholder="nama kelas" value="<?php echo $result['nama_kelas'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_kelas.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE tabel_kelas SET  nama_kelas = '".$_POST['nama_kelas']."'
        WHERE id_kelas = '".$_GET['id']."'");
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