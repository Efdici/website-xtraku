<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$id_lombasiswa = $_GET['id_lombasiswa'];
$data_edit = mysqli_query($conn, "SELECT * FROM lomba_siswa WHERE id_lombasiswa = '$id_lombasiswa'");
$result = mysqli_fetch_array($data_edit)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Lomba Siswa</center></h2>
<div class="box-form">
<form method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <label>Id Lomba</label>
        <center><input type="text" name="id_lomba" value="<?php echo $result['id_lomba'];?>"></center>
        <label>Id Siswa</label>
        <center><input type="text" name="id_siswa" value="<?php echo $result['id_siswa'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_lombasiswa.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE lomba_siswa SET  id_lomba = '".$_POST['id_lomba']."', id_siswa = '".$_POST['id_siswa']."'
        WHERE id_lombasiswa = '$id_lombasiswa'");
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