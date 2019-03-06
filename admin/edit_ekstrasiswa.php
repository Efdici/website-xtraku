<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$id_ekstrasiswa = $_GET['id_ekstrasiswa'];
$data_edit = mysqli_query($conn, "SELECT * FROM ekstra_siswa WHERE id_ekstrasiswa = '$id_ekstrasiswa'");
$result = mysqli_fetch_array($data_edit)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Ekstra Siswa</center></h2>
<div class="box-form">
<form method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <label>Id Ekstra</label>
        <center><input type="text" name="id_ekstra" value="<?php echo $result['id_ekstra'];?>"></center>
        <label>Id Siswa</label>
        <center><input type="text" name="id_siswa" value="<?php echo $result['id_siswa'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_ekstrasiswa.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE ekstra_siswa SET  id_ekstra = '".$_POST['id_ekstra']."', id_siswa = '".$_POST['id_siswa']."'
        WHERE id_ekstrasiswa = '$id_ekstrasiswa'");
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