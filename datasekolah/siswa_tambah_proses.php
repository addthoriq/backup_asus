<?php
	include 'koneksi.php';
	$induk		= $_POST['induk'];
	$nama			= $_POST['nama'];
	$tanggal	= $_POST['tanggal'];
	$pass			= $_POST['password'];
	$status		= $_POST['status'];
	
	$sql			= "insert into siswa (induk, nama_siswa, tanggal_lahir, password, status) values ('$induk', '$nama', '$tanggal', '$pass','$status')";
	
	mysqli_query($konek, $sql);
	header('location: siswa.php');
