<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
  echo "anda belum masuk <a href='login.php'>Login dulu!</a>";
}else{
include ('header2.php');
include 'koneksi.php';
?>

<?php
$Lihat  = "SELECT * FROM tabel_lomba";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil  = mysqli_fetch_array ($Tampil)) {
?>
    <div class="card" style="width: 15rem;">
	 <form method="post">
    <img src="img/tari.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h2><?php echo $hasil['nama_lomba'];?></h2>
   <h5><?php echo $hasil['deskripsi'];?></h5>
   <input type="hidden" name="id_lomba" value="<?php echo $hasil['id_lomba'];?>" readonly>
  <input type="hidden" name="id_lombasiswa" value="" readonly>

<?php include('koneksi.php');
$id_siswa=$_SESSION['id_siswa'];
$sql="SELECT * FROM tabel_siswa WHERE id_siswa = '$id_siswa'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
if($rows>0)
	{
	 $array=mysqli_fetch_assoc($result);
	}
?>
<input type="hidden" name="id_siswa" value="<?php echo $array['id_siswa'];?>">
    <br><input onclick="return confirm('tekan OKE untuk bergabung')" class="btn btn-success" type="submit" name="join" value="Join Lomba">
  </div>
  </form>
</div>
<?php } ?>


<?php
include 'koneksi.php';
if (isset($_POST['join'])){
$insert = mysqli_query($conn, "INSERT INTO lomba_siswa VALUES
                      ('".$_POST['id_lombasiswa']."',
                      '".$_POST['id_lomba']."',
                       '".$_POST['id_siswa']."')");
if ($insert){
   echo 'success.';
}else{
   echo 'gagal disimpan';
  }
?>

<?php } ?>
<?php include ('footer.php') ?>
<?php } ?>