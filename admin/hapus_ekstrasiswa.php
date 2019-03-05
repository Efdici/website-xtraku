<?php
include "koneksi.php";
if(isset($_GET['id'])){
	$delete = mysqli_query($conn, "DELETE FROM ekstra_siswa WHERE id_ekstra = '".$_GET['id']."'");
	header('location:tbl_ekstrasiswa.php');
}
?>