<?php
include "koneksi.php";
$id_lomba = $_GET['id_lomba'];

$sql = ("DELETE  FROM tabel_lomba Where id_lomba = '$id_lomba'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_lomba.php");
?>