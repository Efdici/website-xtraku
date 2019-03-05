<?php
include "koneksi.php";
if(isset($_GET['id'])){
	$delete = mysqli_query($conn, "DELETE FROM tabel_siswa WHERE id_siswa = '".$_GET['id']."'");
	header('location:tbl_siswa.php');
}
?>