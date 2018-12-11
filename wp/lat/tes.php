<form method="POST">
	<input type="text" name="inpat"/>
</form>
<?php
$in = $_POST['inpat'];
$ex = explode(" ",$in);
$im = implode("+",$ex);
$sub = substr($im,3);
$up = strtoupper(substr($im,0,3));

echo $up.$sub;


?>
