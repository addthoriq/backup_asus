<form method="post">
	<input type="text" name="jari"/>
	<!--<input type="text" name="jri"/>-->
</form>

<?php
$jari = $_POST['jari'];
/*$jarii = $_POST['jri'];*/
$jr = $jari * $jari;
$rumus = 4 * 3.14;

function rumus($rumus, $jr){
	$x = $rumus * $jr;
	return $x;
}

echo rumus($rumus, $jr);
/*
function rums($jri){
	return 4 * 3.14 * $jri**2;
}
	echo rums($jarii);*/

?>
