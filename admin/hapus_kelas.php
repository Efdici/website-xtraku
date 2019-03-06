<?php
include "koneksi.php";
$id_kelas = $_GET['id_kelas'];

$sql = ("DELETE  FROM tabel_kelas WHERE id_kelas = '$id_kelas'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_kelas.php");
?>