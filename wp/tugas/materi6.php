<!-- Soal Nomor 1 -->
<form method="POST">
	<input type="text" name="kapital" size=30 id="kapital"/>
</form>
<?php
$masuk = isset($_POST['kapital'])?$_POST['kapital']:"";

function kapital($masuk){
	$in = $masuk;
	return strtoupper($in);
}
function hitung($masuk){
	$hitung = $masuk;
	return str_word_count($masuk);
}
if (empty($masuk)){
	echo "";
}
else {
	echo kapital($masuk);
	echo "<br>";
	echo "Terdapat ".hitung($masuk)." kata";
}
?>
<br>

<!-- Soal Nomor 2 -->
<form method="POST">
	<input type="text" name="invut" size=30 id="invut"/>
</form>
<?php
$cb = isset($_POST['invut'] )?$_POST['invut']:""; //input
$v = strlen($cb)- 3; //jumlah huruf dikurang 3

function itung($cb){ //Memberitahukan jumlah huruf pada input
	$n = strlen($cb);
	return $n;
}

	if (empty($cb)){ //menampilkan kosong(null) pada kotak input
		echo "";
	}
	elseif (itung($cb) > 5){ //jika jml huruf lebih besar dari 5, maka sisakan 3 huruf
		function bintang($cb,$v){ //menggabungkan for dan substr
			for ($x=0; $x<$v;$x++){//mengulang * sebanyak $v
				echo "*";
			}
			echo substr($cb,$v,3);//menghilangkan huruf pada $cb sebanyak $v menyisakan 3 huruf dibelakang
			}
		echo bintang($cb,$v);//memanggil function
	}
	elseif (itung($cb) <= 5){
		function kurang($cb){
			echo $cb.strrev($cb);//memanggil $cb dan memirorkan huruf pada $cb
		}
		echo kurang($cb);
}
?>
<br>

<!--SOAL NOMOR 3-->
<form method="post">
	<input type="text" name="inpat" size=30 id="inpat"/>
</form>
<?php
$angka = isset($_POST['inpat'])?$_POST['inpat']:"";
$n = $angka;

if (empty($angka)){
		echo "";
	}
else {
	$status = "PRIMA";
	for ($x = 2; $x <= $n-1; $x++){ //mengecek $x kedalam $n
		if ($n % $x == 0){ //memerinahkan $n % $x hasilnya 0
	$status = "TIDAK PRIMA";
	break; //memberhentikan pengecekan
		}
	}
	echo "Angka ".$n." adalah : ".$status;
}
?>
