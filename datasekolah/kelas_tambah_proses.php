<?php
	include 'koneksi.php';
	$kelas		= $_POST['kelas'];
	$status		= $_POST['status'];
	
	$sql			= "insert into siswa (kelas, status) values ('$kelas','$status')";
	
	mysqli_query($konek, $skl);
	header('location: kelas.php');
