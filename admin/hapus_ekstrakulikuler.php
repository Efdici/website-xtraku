<?php
include "koneksi.php";
$id_ekstra = $_GET['id_ekstra'];

$sql = ("DELETE  FROM tabel_ekstrakulikuler WHERE id_ekstra = '$id_ekstra'");

mysqli_query($conn,$sql)or die(mysqli_error($conn));
header("Location: tbl_ekstrakulikuler.php");
?>