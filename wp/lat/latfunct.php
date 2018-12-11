<?php
//Pertambahan
function sum($t, $f) {
    $tf = $t + $f;
    return $tf;
}
echo "9 + 5 = " . sum(9, 5) . "<br>";
echo "20 + 50 = " . sum(20, 50) . "<br>";
echo "10 + 8 = " . sum(10, 8)."<br>";

//Pengurangan
function kur($h, $k) {
	$hk = $h - $k;
	return $hk;
}
echo "80 - 14 = ".kur(80, 14). "<br>";
echo "50 - 20 = ".kur(50, 20)."<br>";
echo "7 - 3 = ".kur(7, 3)."<br>";

//Perkalian
function kali($b, $m){
	$bm = $b * $m;
	return $bm;
}
echo "40 * 2 = ".kali(40, 2)."<br>";
echo "5 * 2 = ".kali(5, 2)."<br>";
echo "6 * 5 = ". kali(6, 5)."<br>";

//Pembagian
function bagi($a, $l){
	$al = $a / $l;
	return $al;
}
echo "40 / 2 = ".bagi(40,2)."<br>";
echo "60 / 3 = ".bagi(60,3)."<br>";
echo "16 / 4 = ".bagi(16,4)."<br>";

//Modulus
function sisa($g, $e){
	$ge = $g % $e;
	return $ge;
}
echo "27 % 4 = ".sisa(27, 4)."<br>";
echo "29 % 3 = ".sisa(29,3)."<br>";
echo "57 % 9 = ".sisa(57,9)."<br>";

//Luas Segitiga
function segitiga($a, $t){
	$tiga = ($a * $t) / 2;
	return $tiga;
}
echo segitiga(5, 6);
?>
