<?php include ('heder.php');?>

<?php
include 'koneksi.php';
$id_siswa = $_GET['id_siswa'];
$data_edit = mysqli_query($conn, "SELECT * FROM tabel_siswa WHERE id_siswa = '$id_siswa'");
$result = mysqli_fetch_array($data_edit)
?>

<!DOCTYPE html>
<html>
<head>
<title>Update</title>
</head>
<body>
<h2 style="margin:2%;"><center>Update Data Siswa</center></h2>
<div class="box-form">
<form action="" method="POST">
    <table style="margin:2%; margin-top: 1%">
        <div class="container">
        <br><label>Nama Siswa</label>
        <center><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa'];?>" ></center>
        <br><label>Id Kelas</label>
        <center> <select name="id_kelas" style="width: 455px;padding: 8px 10px;">
        <?php include('koneksi.php');
        $sql="SELECT * FROM tabel_kelas";
        $kelas=mysqli_query($conn,$sql);
        while($baris=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
        ?>
        <option value="<?php echo $baris['id_kelas'];?>"<?= ($result['id_kelas'] == $baris['id_kelas'])? 'selected' :'';?>>
        <?php echo $baris['nama_kelas'];?></option>
        <?php } ?>
        </select></center>
        <br><label>Username</label>
        <center><input type="text" name="username" value="<?php echo $result['username'];?>"></center>
        <br><label>Password</label>
        <center><input type="text" name="password" value="<?php echo $result['password'];?>"></center>
        <br><center><button type="submit" name="edit" value="Edit" class="btn btn-primary">Submit</button>
        <a href=tbl_siswa.php class="btn btn-success">View Data</a>
        </div>
    </table>
</form>
</div>

<?php
if (isset($_POST['edit'])) {
$update = mysqli_query($conn, "UPDATE tabel_siswa SET  nama_siswa = '".$_POST['nama_siswa']."',id_kelas = '".$_POST['id_kelas']."',
username = '".$_POST['username']."',password = '".$_POST['password']."'
WHERE id_siswa = '$id_siswa'");
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