<style>
	#hasil{
		background-color:red;
		color:#ffffff;
		font:24px Arial;
	}
	#kpk{
		background-color:blue;
		color:yellow;
		font:48px Arial;
	}
</style>
<form action="" method="POST">
	<input type="text" size=30 name="tambah"/><br>
	<input type="text" size=30 name="kurang"/>
	<input type="submit"/>
</form>

<?php
/*	$a = isset($_POST['tambah'])?$_POST['tambah']:"";
	$b = isset($_POST['kurang'])?$_POST['kurang']:"";
	$c = $a/2;

		echo (($a*$b)/$c);

$a = $_POST['tambah'];
$b = $_POST['kurang'];
$c = (($b*$a)+$b)+$a;

echo "<div class=hasil><marquee amount=100>". ($a*$c)*2 ."</marquee></div>";*/

	$a = $_POST['tambah'];
	$b = $_POST['kurang'];
	$c = $b+($a**2);
	$d = ($c - $b)+($a*2);

	echo "<h1 id=hasil><marquee amount=100>". $d*($b/2) ."</marquee></h1>";
	echo "<h1 id=kpk><marquee amount=100%>WKWKWKWK MAMAM NOH SOAL</marquee></h1>";

	
?>
