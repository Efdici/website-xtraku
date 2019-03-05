<?php
session_start();
include ('header2.php');
include ('koneksi.php');
$id_user = $_SESSION['id_siswa'];
$sql = "SELECT * FROM tabel_siswa WHERE id_siswa = '$id_user'";
$q = mysqli_query($conn,$sql);
$w = mysqli_num_rows($q);
if($w>0)
{
$e =mysqli_fetch_assoc($q);
}
?>
<form class="box" method="post">
<div class="t">
<h1>Edit Profil</h1>
</div>
  <input  type="hidden" name="id_siswa">
  <input  type="text" name="nama_siswa" value="<?php echo $e['nama_siswa'];?>">
  <select type="text" name="id_kelas" style="width: 300px;padding: 14px 10px;border-radius: 5px 5px 5px 5px;;border: 1px solid #808080;">
  <?php include('koneksi.php');
  $sql="SELECT * FROM tabel_kelas";
  $kelas=mysqli_query($conn,$sql);
  while($baris=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
  ?>
  <option value="<?php echo $baris ['id_kelas'];?>"><?php echo $baris ['nama_kelas'];?></option>
  <?php } ?>
  </select>
  <input  type="text" name="username" value="<?php echo $e['username'];?>">
  <input  type="hidden" name="password" value="<?php echo $e['password'];?>">
  <input  class="btn btn-success" type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
$update = mysqli_query($conn, "UPDATE tabel_siswa SET  nama_siswa = '".$_POST['nama_siswa']."',id_kelas = '".$_POST['id_kelas']."',
username = '".$_POST['username']."',password = '".$_POST['password']."'
WHERE id_siswa = '$id_user'");
  if($update){
    echo 'success';
  }else{
    echo 'gagal edit';
  }
}
?>
<?php include ('footer.php');?>