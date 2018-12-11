<form method="post">
	<input type="text" name="input"/>
</form>

<?php
/*  input krakatau, huruf < 6 echo krakatau***
 hurufnya >= 6 echo krakatau-krakatau-krakatau*/
$c =  ((isset($_POST['input'])?$_POST['input']:"0"));
$b = strlen($c);

if ($b < 6){
	echo "$c***";
} elseif ($b >= 6) {
	echo "$c-$c-$c";
}
?>
