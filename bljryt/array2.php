<?php
//array
// variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//keynya adalah index, yg dimulai dari 0

//membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

//Menampilkan array
//var_dump() / print_r()

//Menampilkan 1 elemen pada array
//echo $arr1[0]

//Menambahkan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo $hari[3];

?>
