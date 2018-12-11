<form method="POST">
	<select name="gender">
		<option>Jenis Kelamin</option>
		<option value="laki">Laki-Laki</option>
		<option value="pr">Perempuan</option>
		<option value="lgbt">Lainnya</option>
	</select>
	<input type="submit" value="KIRIM!"/>
</form>

<?php
	$gender =  (isset($_POST['gender'])?$_POST['gender']:"0");

switch ($gender) {

	case "laki";
		echo "Anda Ganteng";
		break;

	case "pr";
		echo "Anda Cantik";
		break;

	case "lgbt";
		echo "Anda LAKNAT!!!";
		break;

	default;
	echo "Isi terlebih dahulu";
}
?>

<!--foreach-->
<?php
$a = array(1 => "re", "mi", "fa");

foreach ($a as $key => $value){
	echo "$key => $value <br>";
}
?>

