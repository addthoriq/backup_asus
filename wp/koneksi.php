<?php
$server = "localhost";
$username = "phpmyadmin";
$pass = "123";
$dbname = "latihan";
$sql = mysqli_connect($server,$username,$pass,$dbname); //Membuat Koneksi(perhubungan php ke database)

if (!$sql){
	die("Connection Failed".mysqli_connect_error());
}
?>
