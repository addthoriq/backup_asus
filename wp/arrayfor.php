<?php
/* $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
     echo "key=".$x.", Value=".$x_value;
     echo "<br>";
}*/

/*$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

echo $cars[0][0].": In stock: ".$cars[0][1].": sold: ".$cars[0]
*/

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
   echo "<p><b>Row Number $row</b></p>";
   echo "<ul>";
	for ($col = 0; $col < 3; $col+=2) {
   echo "<li>"."$cars[$row][$col]"."</li>";
   }
   echo "</ul>";


/*$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
*/
?>
