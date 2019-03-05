<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id_user FROM tabel_user WHERE id_user='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) = = 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM tabel_user WHERE id_user='$id'");
		if($del){
			echo 'Data siswa berhasil di hapus! ';
			echo '<a href="view_data.php">Kembali</a>';
		}else{
			echo 'Gagal menghapus data! ';
			echo '<a href="view_data.php">Kembali</a>';
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>