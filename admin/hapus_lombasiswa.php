<?php
include "koneksi.php";
$id_lombasiswa = $_GET['id_lombasiswa'];

$sql = ("DELETE  FROM lomba_siswa WHERE id_lombasiswa = '$id_lombasiswa'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_lombasiswa.php");
?>