<?php include ('heder.php');?>
<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM ekstra_siswa WHERE id_ekstra = '".$_GET['id']."'");
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
        <label>Id Siswa</label>
        <center><input type="text" name="id_siswa" placeholder="id siswa" value="<?php echo $result['id_siswa'];?>"></center>
        <br><center><button type="submit" name="edit" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_ekstra-siswa.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
if (isset($_POST['edit'])) {
    $update = mysqli_query($conn, "UPDATE ekstra_siswa SET  id_siswa = '".$_POST['id_siswa']."'
        WHERE id_ekstra = '".$_GET['id']."'");
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