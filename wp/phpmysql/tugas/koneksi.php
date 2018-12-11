<?php
	$server		= "localhost";
	$usr			= "phpmyadmin";
	$pass			= "123";
	$dbname		= "latihan";
	
	$konek	= mysqli_connect($server, $usr, $pass, $dbname);
	
	if (!$konek){
		die ("Connection lost :".mysqli_connection_error());
	}
	
	$sql = "CREATE TABLE siswa (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama_siswa VARCHAR(30) NOT NULL,
	kelas VARCHAR(2),
	pelajaran VARCHAR(25),
	nilai INT(3)
	)"; 
	
	$skl	= "CREATE TABLE kelas (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama_kelas VARCHAR(2) NOT NULL,
	status BOOLEAN NOT NULL
	)";
	
	$scl	= "CREATE TABLE pelajaran (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	mata_pelajaran VARCHAR(30) NOT NULL,
	status BOOLEAN NOT NULL
	)";
	
	mysqli_query($konek, $sql);
	mysqli_query($konek, $skl);
	mysqli_query($konek, $scl);
//	if (mysqli_connect_error()) {
//		die("Database connection failed: " . mysqli_connect_error());
//	}
//	echo "Connected successfully";
?>
