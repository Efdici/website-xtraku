<?php
include "koneksi.php";
$id_ekstrasiswa = $_GET['id_ekstrasiswa'];

$sql = ("DELETE  FROM ekstra_siswa WHERE id_ekstrasiswa = '$id_ekstrasiswa'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_ekstrasiswa.php");
?>