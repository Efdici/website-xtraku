<?php
session_start();
if(!isset($_SESSION['nama_siswa'])){
echo "anda belum masuk <a href='login.php'>Login dulu!</a>";
}else{
include ('header2.php');
include 'koneksi.php';
?>
<?php
$id_ekstra = $_GET['id_ekstra'];
$Lihat  = "SELECT * FROM tabel_ekstrakulikuler WHERE id_ekstra = '$id_ekstra'";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil  = mysqli_fetch_array ($Tampil)) {
?>

<h4 class="xtra"><?php echo $hasil['nama_ekstra'];?></h4>
<div class = "pemisah">
<img src = "img/bola.png" height="250" width="300" class = "gambar" />
</div>
<div class="tengah">
<br><p align=justify><?php echo $hasil['deskripsi'];?></p>
</div>
<div class="card-body">
<form method="post">
<label style="margin-right:20px;">Pembimbing : <?php echo $hasil['nama_pembimbing'];?></label>
<br><label style="margin-right:20px;">Jml Anggota : <?php echo $hasil['jumlah_anggota'];?></label>
<input type="hidden" name="id_ekstra" value="<?php echo $id_ekstra ?>" readonly>
<?php } ?>

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

<br><i>
<?php
include('koneksi.php');
$id_siswa=$_SESSION['id_siswa'];
$sqls = "SELECT count(id_siswa) AS jumlah FROM ekstra_siswa WHERE id_siswa = $id_siswa";
$data =mysqli_query($conn,$sqls);
$sdas=mysqli_fetch_assoc($data);
//echo '<pre>';
// print_r($id_siswa);
//print_r($_SESSION);
if($sdas['jumlah'] >=2){
echo "Anda Tidak Bisa Bergabung Karena Melebihi Batas.";
}else{
?>
<br><input onclick="return confirm('tekan OKE untuk bergabung')" class="btn btn-success" type="submit" name="join" value="Join Ekstrakulikuler">
<?php } ?>
</form>
</div>

<?php
include 'koneksi.php';
if (isset($_POST['join'])){
$insert = mysqli_query($conn, "INSERT INTO ekstra_siswa VALUES
                      ('".$_POST['id_ekstra']."',
                       '".$_POST['id_siswa']."')");
if ($insert){
   echo 'success.';
}else{
   echo 'gagal disimpan',mysqli_error($conn);
  }
}
?>

<?php } ?>
<?php include ('footer.php');?>