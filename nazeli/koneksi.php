<?php
$server		= "localhost";
$usr		= "phpmyadmin";
$pass		= "123";
$dbname		= "katering_nazeli";

$koneksi	= mysqli_connect($server, $usr, $pass, $dbname);

if (!$koneksi) {
	die("KONEKSI GAGAL: ".mysqli_connect_error());
}
