<?php
	$server		= "localhost";
	$user			= "phpmyadmin";
	$pass			= "123";
	$dbname		= "coba_sekolah";
	
	$konek		= mysqli_connect($server, $user, $pass, $dbname);
	
	if (!$konek){
		die("Connection Error: ".mysqli_connection_error());
	}
	
	$sql		= "CREATE TABLE siswa (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	induk INT(11) NOT NULL,
	nama_siswa VARCHAR(30) NOT NULL,
	tanggal_lahir DATE NOT NULL,
	password VARCHAR(30) NOT NULL,
	status BOOLEAN NOT NULL
	)";
	
	$skl		= "CREATE TABLE kelas (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	kelas VARCHAR(2) NOT NULL,
	status BOOLEAN NOT NULL
	)";
	
	$scl		= "CREATE TABLE mata_pelajaran (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama_pelajaran VARCHAR(20) NOT NULL,
	nama_pengajara VARCHAR(30) NOT NULL,
	status BOOLEAN NOT NULL
	)";
	
	$shl		= "CREATE TABLE nilai (
	id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_induk INT(11) NOT NULL,
	id_kelas INT(11) NOT NULL,
	id_pelajaran INT(11) NOT NULL,
	nilai INT(3) NOT NULL
	)";
	
	mysqli_query ($konek, $sql);
	mysqli_query ($konek, $skl);
	mysqli_query ($konek, $scl);
	mysqli_query ($konek, $shl);
