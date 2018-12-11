<?php
//index array
$buah = array("Pisang","Apel","Jeruk");
$buah[] = "Kurma";

echo $buah[3]."<br>";
foreach ($buah as $key => $value) {
   echo $value." ";
}
echo "<br>";

//Asosiatif Array
$santri = array(
          "Nama" => "Thoriq",
          "Nilai" => 90
          );

echo $santri["Nama"]."<br>";
foreach ($santri as $key => $value) {
       echo $key." ". $value." ";
}

?>
