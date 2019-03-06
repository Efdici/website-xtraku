<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
echo "Kamu belum login! <a href='login.php'>Login dulu</a>";
}else{
include('koneksi.php');
// print_r($_SESSION);
$nama_siswa=$_SESSION['nama_siswa'];
$id_siswa=$_SESSION['id_siswa'];
$sql="SELECT * FROM tabel_siswa WHERE nama_siswa = '$nama_siswa'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
if($rows>0)
	{
	  $array=mysqli_fetch_assoc($result);
	}
?>
<?php include ('header2.php') ?>
<div id="section" class="bok">
<img style="width: 80px;margin-top:7px;" src="img/user.png"/>
<br><label style="margin-left:30px;">NAMA :</label>
<input type="text" value="<?php echo $array['nama_siswa'];?>" readonly>
<?php
$Lihat  = "SELECT s.*,k.nama_kelas FROM tabel_siswa s LEFT JOIN tabel_kelas k ON s.id_kelas = k.id_kelas WHERE s.id_siswa='".$id_siswa."'";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil	=	mysqli_fetch_array ($Tampil)){
  {
?>
<br><label style="margin-left:35px;">KELAS :</label>
<input type="text" value="<?php echo $hasil['nama_kelas'];?>" readonly>
<?php }} ?>
<br><label>USERNAME	:</label>
<input type="text" value="<?php echo $array['username'];?>" readonly></br>
<a href="edit_profil.php" class="btn btn-success">Edit</a>
</div>
<?php include ('foter.php') ?>
<?php } ?>