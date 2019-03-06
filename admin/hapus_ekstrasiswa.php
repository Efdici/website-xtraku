<?php
include "koneksi.php";
if(isset($_GET['id_ekstrasiswa'])){
	$delete = mysqli_query($conn, "DELETE FROM ekstra_siswa WHERE id_ekstrasiswa = '".$_GET['id_ekstrasiswa']."'");
	header('location:tbl_ekstrasiswa.php');
}
?>