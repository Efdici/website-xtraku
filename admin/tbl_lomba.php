<?php include ('heder.php');?>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <br><font size="4"><center><b>DATA SISWA</b></center><font><br>
    <a href="tambah_lomba.php" style="padding:0.4% 0.8%; margin-left: 5%; background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Add</a>
    <table width="90%" style="margin-top: 1%; margin-left: 5%;"  border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFA600" height="40">
            <th width="12%"><center>Id Lomba</center></th>&nbsp;
            <th width="12%"><center>Nama Lomba</center></th>&nbsp;
            <th width="12%"><center>Deskripsi</center></th>&nbsp;
            <th width="12%"><center>Gambar</center></th>&nbsp;
            <th width="12%"><center>Opsi</center></th>&nbsp;
        </tr>
<?php
include "koneksi.php";
$Lihat  = "SELECT * FROM tabel_lomba";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil             = mysqli_fetch_array ($Tampil)) {
        $id_lomba          = stripslashes  ($hasil['id_lomba']);
        $nama_lomba        = stripslashes  ($hasil['nama_lomba']);
        $deskripsi         = stripslashes  ($hasil['deskripsi']);
        $gambar            = stripslashes  ($hasil['gambar']);
        {
?>
        <tr align="center" height="40">
            <td><?=$id_lomba?></td>
            <td><?=$nama_lomba?></td>
            <td><?=$deskripsi?></td>
            <td><?=$gambar?></td>
            <td>
                <a onclick="return confirm('tekan OKE untuk menghapus')" href="hapus_lomba.php?id_lomba=<?php echo $hasil['id_lomba'];?>" style="padding:1% 1%;background-color: #B22222;color: #fff;border-radius: 2px;text-decoration: none;">Delete</a>
                <a href="edit_lomba.php?id_lomba=<?php echo $hasil['id_lomba'];?>" style="padding:1% 1%;background-color: #1E90FF;color: #fff;border-radius: 2px;text-decoration: none;">Update</a>
            </td>
<?php }} ?>
    </table>
</body>
</html>
<?php include ('footer.php');?>