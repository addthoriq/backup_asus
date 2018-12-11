<?php
$servername = "localhost"; //nama server
$username   = "phpmyadmin"; // username dari mysql yang ada di phpmyadmin
$password   = "123"; // password dari mysql yang ada di phpmyadmin
$dbname     = "instagram"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " );
}
?>
