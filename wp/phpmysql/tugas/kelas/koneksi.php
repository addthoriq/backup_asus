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
	
	mysqli_query($konek, $sql);
//	if (mysqli_connect_error()) {
//		die("Database connection failed: " . mysqli_connect_error());
//	}
//	echo "Connected successfully";
?>
