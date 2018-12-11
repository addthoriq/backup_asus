<?php
//1. Contoh Array
  //a
     $surah = array("Al Fatihah","Al Kahfi","An Naas"); {
	  echo "Surah Pembuka, Pertengahan dan Akhir di Al Qur'an adalah:"." ".$surah[0].", ".$surah[1].", ".$surah[2]."."."<br>";
}

  //b
     $laptop = array("Asus","Acer","Lenovo","Dell"); {
	  echo "Jumlah merek laptop yang dipake santri Umar ada ".count ($laptop)." buah.<br>";
}

 //c
    $nomor = array("Saiful"=>"085866674213","Ipul"=>"081265028894","Bagas"=>"089876777492"); {
	  echo "Nomor Hape nya Saiful = ".$nomor['Saiful']."<br>";
	  echo "Nomor Hape nya Ipul = ".$nomor['Ipul']."<br>";
	  echo "Nomor Hape nya Bagas = ".$nomor['Bagas']."<br>";
}

//2. Contoh For
  //a
     $nama = array("Soekarno","Soeharto","Habibie","Gus Dur","Megawati","SBY","Jokowi"); {

	 echo "<ol>";
	 echo "Nama-Nama Presiden RI:<br>";
	 for ($x = 0; $x < 7; $x++){
	 echo "<li>$nama[$x]</li>";
	}
	 echo "</ol>";
}

  //b
      $santri = array(
	       "Namanya" => "Thoriq,",
	       "Nilainya"=> 90
		);
	 foreach ($santri as $data => $value) {
	 echo $data." ".$value." "."<br>";
}

  //c
     $bahasa = array("Aku","Saya","Gue","Kulo","Ulun","Ana"); {
     
        echo "Bermacam-macam kata yang menunjukkan diri sendiri:<br>";
        for ($y = 0; $y < 6; $y++){
                echo "<li>$bahasa[$y]"; 
                }
}

//3. Contoh Multidimensional Array

  //a. PHP Multidimensional array adalah tipe array yang mana kita dapat memasukkan satu atau lebih array(element) ke dalam array

  //b.
    $makan = array(
                array("Nasi Goreng","Nasi Kuning","Nasi Uduk"),
                array("Ayam Kentucky","Ayam Bakar","Ayam Goreng"),
                array("Telur","Tahu","Tempe"),
                array("Donat","Lumpia","Bolu")
                );

     for ($row = 0; $row < 4; $row++) {
     echo "<p><b>Daftar Menu Makanan: </b></p>";
     echo "<ul>";
          for ($col = 0; $col < 3; $col++) {
          echo "<li>".$makan[$row][$col]."</li>";
          }
     echo "</ul>";
}

  //c.
      $barang = array (
                array ("Mie Goreng",6,12),
                array ("Energen",9,24),
                array ("Milo",4,5),
                array ("Good Day",1,2)
                      ); 

        echo $barang[0][0]." = Terpakai: ".$barang[0][1].", Tersisa: ".$barang[0][2].".<br>";
        echo $barang[1][0]." = Terpakai: ".$barang[1][1].", Tersisa: ".$barang[1][2].".<br>";
        echo $barang[2][0]." = Terpakai: ".$barang[2][1].", Tersisa: ".$barang[2][2].".<br>";
        echo $barang[3][0]." = Terpakai: ".$barang[3][1].", Tersisa: ".$barang[3][2].".<br>";
?>
