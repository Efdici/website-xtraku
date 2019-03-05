<?php include ('heder.php');?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
<br><font size="4"><center><b>DATA EKSTRAKULIKULER</b></center><font><br>
<a href=tambah1.php style="padding:0.4% 0.8%; margin-left: 5%; background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Add</a>
<table width="90%" style="margin-top: 1%; margin-left: 5%;"  border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFA600" height="40">
        <th width="12%"><center>Id Ekstrakulikuer</center></th>&nbsp;
        <th width="12%"><center>Nama Ekstrakulikuler</center></th>&nbsp;
        <th width="12%"><center>Deskripsi</center></th>&nbsp;
        <th width="12%"><center>Gambar</center></th>&nbsp;
        <th width="12%"><center>Kategori</center></th>&nbsp;
        <th width="12%"><center>Nama Pembimbing</center></th>&nbsp;
        <th width="12%"><center>Jumlah Anggota</center></th>&nbsp;
        <th width="12%"><center>Opsi</center></th>&nbsp;
    </tr>
<?php
include "koneksi.php";
$Lihat  = "SELECT * FROM tabel_ekstrakulikuler";
$Tampil = mysqli_query($conn, $Lihat);
while ( $hasil  = mysqli_fetch_array ($Tampil)) {
        $id_ekstra          = stripslashes ($hasil['id_ekstra']);
        $nama_ekstra        = stripslashes ($hasil['nama_ekstra']);
        $deskripsi          = stripslashes ($hasil['deskripsi']);
        $gambar             = stripslashes ($hasil['gambar']);
        $kategori           = stripslashes ($hasil['kategori']);
        $nama_pembimbing    = stripslashes ($hasil['nama_pembimbing']);
        $jumlah_anggota     = stripslashes ($hasil['jumlah_anggota']);
    {
?>
    <tr align="center" height="40">
        <td><?=$id_ekstra?></td>
        <td><?=$nama_ekstra?></td>
        <td><?=$deskripsi?></td>
        <td><?=$gambar?></td>
        <td><?=$kategori?></td>
        <td><?=$nama_pembimbing?></td>
        <td><?=$jumlah_anggota?></td>
        <td>
            <a onclick="return confirm('tekan OKE untuk menghapus')" href="hapus_ekstrakulikuler.php?id=<?php echo $hasil['id_ekstra'];?>" style="padding:1% 1%;background-color: #B22222;color: #fff;border-radius: 2px;text-decoration: none;">Delete</a>
            <a href="edit_ekstrakulikuler.php?id=<?php echo $hasil['id_ekstra'];?>" style="padding:1% 1%;background-color: #1E90FF;color: #fff;border-radius: 2px;text-decoration: none;">Update</a>
        </td>
        <?php
        }
    }
?>
</table>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
<?php include ('footer.php');?>