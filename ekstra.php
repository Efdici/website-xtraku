<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
echo "anda belum masuk <a href='login.php'>Login dulu!</a>";
}else{
include ('header2.php');
include 'koneksi.php';
$Lihat  = "SELECT * FROM tabel_ekstrakulikuler";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil  = mysqli_fetch_array ($Tampil)) {
?>
<div class="card" style="width: 15rem;">
<img src="img/abu.png" class="card-img-top" alt="...">
<div class="card-body">
<input type="text" name="nama_ekstra" value="<?php echo $hasil['nama_ekstra'];?>" style="border:1px solid #FFFFFF;" readonly>
<a  type="submit" name="edit" href="detail_ekstra.php?id_ekstra=<?php echo $hasil['id_ekstra'];?>" class="btn btn-primary" style="width: 12rem;">Lihat Detail</a>
</div>
</div>
<?php }?>
<?php include ('footer.php');?>
<?php } ?>