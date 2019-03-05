<?php
include "koneksi.php";
if(isset($_GET['id'])){
	$delete = mysqli_query($conn, "DELETE FROM tabel_kelas WHERE id_kelas = '".$_GET['id']."'");
	header('location:tbl_kelas.php');
}
?>