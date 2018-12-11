<?php
	include 'koneksi.php';
	$kelas	= $_POST['kelas'];
	$status	= $_POST['status'];

	$skl	= "INSERT INTO kelas (nama_kelas, status) VALUES ('$kelas', '$status')";
	
	mysqli_query($konek, $skl);
	header('location: kelas.php');
?>
