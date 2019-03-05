<?php include ('header.php') ?>
<form class="box" action="" method="post">
<div class="t">
<h1>Login</h1>
</div>
<input  type="text" name="username" placeholder="Username" value="" required>
<input  type="password" name="password" placeholder="Password" value="" required>
<input type="submit" name="login" value="Login">
  <p>
    Belum punya akun?<a href="registration.php">Sign Up</a>
  </p>
</form>
<?php
include"koneksi.php";
if(isset($_POST['login'])){
$cek = mysqli_query($conn, "SELECT * FROM tabel_siswa WHERE
username = '".$_POST['username']."' AND password = '".$_POST['password']."'");
$hasil      = mysqli_fetch_array($cek);
$count      = mysqli_num_rows($cek);
$nama_user  = $hasil['nama_siswa'];
$id_user    = $hasil['id_siswa'];

if($count > 0){
session_start();
$_SESSION ['nama_siswa'] = $nama_user;
$_SESSION ['id_siswa'] = $id_user;
header("location: index2.php");
  }else{
    echo "gagal masuk";
  }
}
?>
<?php include ('footer.php') ?>