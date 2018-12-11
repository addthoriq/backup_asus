<?php
	include 'koneksi.php';
	$id					= $_POST['id'];
	$nama				= $_POST['nama'];
	$kelas			= $_POST['kelas'];
	$pelajaran	= $_POST['pelajaran'];
	$nilai			= $_POST['nilai'];

	$sql	= "UPDATE siswa SET pelajaran = '$pelajaran', nilai = '$nilai' where id='$id'";
	
	mysqli_query($konek, $sql);
	header('location: index.php');
?>
