<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
echo "anda belum masuk <a href='login.php'>Login dulu!</a>";
}else{
include ('header2.php');
include 'koneksi.php';?>
<div class="row">
<?php
$Lihat  = "SELECT * FROM tabel_ekstrakulikuler";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil  = mysqli_fetch_array ($Tampil)) {
?>
<div class="col-md-3">
<div class="card card-yt" style="width: 13rem;">
<img src="img/abu.png" class="card-img-top" alt="...">
<div class="card-body">
<center><h4><?php echo $hasil['nama_ekstra'];?></h4>
<a type="submit" name="edit" href="detail_ekstra.php?id_ekstra=<?php echo $hasil['id_ekstra'];?>" class="btn btn-primary"
style="width: 10rem;">Lihat Detail</a>
</div>
</div>
</div>
<?php } ?>
</div>
<?php include ('footer.php');?>
<?php } ?>