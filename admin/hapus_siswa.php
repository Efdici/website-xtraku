<?php
include "koneksi.php";
$id_siswa = $_GET['id_siswa'];

$sql = ("DELETE  FROM tabel_siswa WHERE id_siswa = '$id_siswa'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_siswa.php");
?>