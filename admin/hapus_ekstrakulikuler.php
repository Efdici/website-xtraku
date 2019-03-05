<?php
include "koneksi.php";
if(isset($_GET['id'])){
	$delete = mysqli_query($conn, "DELETE FROM tabel_ekstrakulikuler WHERE id_ekstra = '".$_GET['id']."'");
	header('location:index1.php');
}
?>