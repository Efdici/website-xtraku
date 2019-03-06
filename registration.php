<?php include ('header.php') ?>
<form class="box" method="post">
  <div class="t">
  <h1>Register</h1>
</div>
  <input  type="hidden" name="id_siswa" placeholder="id siswa">
  <input  type="text" name="nama_siswa" placeholder="Nama Siswa" value="" required>
  <select type="text" name="id_kelas" style="width: 300px;padding: 14px 10px;border-radius: 5px 5px 5px 5px;;border: 1px solid #808080;">
    <?php include('koneksi.php');
    $sql="SELECT * FROM tabel_kelas";
    $kelas=mysqli_query($conn,$sql);
    while($baris=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
    <option value="<?php echo $baris ['id_kelas'];?>"><?php echo $baris ['nama_kelas'];?></option>
    <?php } ?>
  </select>
  <input  type="text" name="username" placeholder="Username" value="" required>
  <input  type="password" name="password" placeholder="Password" value="" required>
  <input type="submit" name="register" value="Register">
  <p>
		Sudah punya akun?<a href="login.php">Sign In</a>
	</p>
</form>
<?php
include 'koneksi.php';
if (isset($_POST['register'])){
$insert = mysqli_query($conn, "INSERT INTO tabel_siswa VALUES
                        ('".$_POST['id_siswa']."',
                        '".$_POST['nama_siswa']."',
                        '".$_POST['id_kelas']."',
                        '".$_POST['username']."',
                        '".$_POST['password']."')");
}
?>
<?php include ('foter.php') ?>