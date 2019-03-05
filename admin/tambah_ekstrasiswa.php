<?php include ('heder.php');?>
<h2 style="margin:2%;"><center>Add Data Ekstra Siswa</center></h2>
<div class="box-form">
<form action="" method="POST">
<table style="margin:2%; margin-top: 1%">
    <div class="container">
        <label>Id Ekstra</label></br>
        <center><input type="text" name="id_ekstra" placeholder="id ekstra"></center>
        <label>Id Siswa</label></br>
        <center><input type="text" name="id_siswa" placeholder="id siswa" value="" required></center>
        <br><center><button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Submit</button>
        <a href=tbl_ekstrasiswa.php class="btn btn-success">View Data</a>
    </div>
</table>
</form>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$insert = mysqli_query($conn, "INSERT INTO ekstra_siswa VALUES
                        (
                        '".$_POST['id_ekstra']."',
                        '".$_POST['id_siswa']."')");
if ($insert) {
    echo 'success';
}else{
    echo 'gagal disimpan',mysqli_error($conn);
}
}
?>
<?php include ('footer.php');?>