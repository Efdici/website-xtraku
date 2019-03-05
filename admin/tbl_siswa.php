<?php include ('heder.php');?>
<html>
<head>
    <title>Admin</title>
</head>
<body>
<br><font size="4"><center><b>DATA SISWA</b></center><font><br>
<a href=tambah_siswa.php style="padding:0.4% 0.8%; margin-left: 5%; background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Add</a>
<table width="90%" style="margin-top: 1%; margin-left: 5%;"  border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFA600" height="40">
        <th width="12%"><center>id Siswa</center></th>&nbsp;
        <th width="12%"><center>Nama Siswa</center></th>&nbsp;
        <th width="12%"><center>id Kelas</center></th>&nbsp;
        <th width="12%"><center>Username</center></th>&nbsp;
        <th width="12%"><center>Password</center></th>&nbsp;
        <th width="12%"><center>Opsi</center></th>&nbsp;
    </tr>
<?php
include "koneksi.php";
$Lihat  = "SELECT s.*,k.nama_kelas FROM tabel_siswa s LEFT JOIN tabel_kelas k ON s.id_kelas = k.id_kelas";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil                  = mysqli_fetch_array ($Tampil)) {
        $id_siswa               = stripslashes ($hasil['id_siswa']);
        $nama_siswa             = stripslashes ($hasil['nama_siswa']);
        $id_kelas               = stripslashes ($hasil['nama_kelas']);
        $username               = stripslashes ($hasil['username']);
        $password               = stripslashes ($hasil['password']);
    {
?>
<tr align="center" height="40">
    <td><?=$id_siswa?></td>
    <td><?=$nama_siswa?></td>
    <td><?=$id_kelas?></td>
    <td><?=$username?></td>
    <td><?=$password?></td>
    <td>
        <a onclick="return confirm('tekan OKE untuk menghapus')" href="hapus_siswa.php?id=<?php echo $hasil['id_siswa'];?>" style="padding:1% 1%;background-color: #B22222;color: #fff;border-radius: 2px;text-decoration: none;">Delete</a>
        <a href="edit_siswa.php?id=<?php echo $hasil['id_siswa'];?>" style="padding:1% 1%;background-color: #1E90FF;color: #fff;border-radius: 2px;text-decoration: none;">Update</a>
    </td>
    <?php
        }
    }
?>
</table>
</body>
</html>
<?php include ('footer.php');?>