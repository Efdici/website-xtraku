<?php
include "koneksi.php";
$id_lomba = $_GET['id'];

$sql = ("DELETE  FROM lomba_siswa Where id_lomba = '$id_lomba'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_lombasiswa.php");
?>