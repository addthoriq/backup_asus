<html>
 <head>
 <title>TUGAS WEB PROGRAMING</title>
 </head>
 <body>
 <div style="text-align:center">
  <div>
  <?php
//TUGAS WEB PROGRAMING OPERATOR ARITMATIKA PHP
 $a = 10;
 $b = 20;
 $c = 15;
 $d = 2+4+6;

//1
echo $a + $b."<br>";

//2
echo $b - $c."<br>";

//3
echo $d * $a."<br>";

//4
echo $b / $a;
  ?>
  </div>
  <br>
  
  <div>
  <?php
//TUGAS WEB PROGRAMING INCRETMENT/DECREMENT OPERATOR PHP.
 $a = 20;
 $b = 30;
 $c = 40;
 $d = 25-15;

//1
echo ++$a."<br>";

//2
echo $b++." ".$b."<br>";

//3
echo $c--." ".$a."<br>";

//4
echo --$d." ".$c." ".$b++." ".++$a;
  ?>
  </div>
  <br>

  <div>
 <?php
//TUGAS WEB PROGRAMING OPERATOR KOMPARASI PHP.
 $a = 30;
 $b = 15;
 $c = 80;
 $d = 6;
 $e = "true";

//1
var_dump($a < $d); //bool(false)
echo "<br>";

//2
var_dump($d === $e); //bool(false)
echo "<br>";

//3
var_dump($b != $c); //bool(true)
echo "<br>";

//4
var_dump($c >= $a); //bool(true)
 ?>
  </div>
  <br>

  <div>
  <?php
//TUGAS WEB PROGRAMING OPERATOR LOGIKA PHP.
  $a = 20;
  $b = 60;
  $c = 40;
  $d = 2;
  $e = "56";

//1
if (($a == 20) && ($c === "40")); {
   echo "Nomor satu<br>";
}

//2
if (($d < $a) || ($b == 30)); {
   echo "Nomor dua<br>";
}

//3
if (($b <> 60) or ($a == "20")); {
   echo "Nomor tiga<br>";
}

//4
if (($c == 20+20) xor ($d > $e)); {
   echo "Nomor empat";
}
?>
  </div>
  </div>
 </body>
</html>
