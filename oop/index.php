<?php
   require_once('animal.php');
   require_once('frog.php');
   require_once('ape.php');


   $sheep = new Animal("Shaun");

   echo "Name : " . $sheep->Name = "Shaun" . "<br>";
   echo "Legs : " . $sheep->legs = "4" . "<br>";
   echo "cold blooded : " . $sheep->coldblooded . "<br></br>";


   $kodok = new Frog("Buduk");

   echo "Name : " . $kodok->Name = "Buduk" . "<br>";
   echo "Legs : " . $kodok->legs = "4" . "<br>";
   echo "cold blooded : " . $kodok->coldblooded . "<br>";
   echo "Jump : " . $kodok->Jump = "Hop hop" . "<br></br>";


   $sungokong = new Ape("Kera sakti");

   echo "Name : " . $sungokong->Name = "Kera sakti" . "<br>";
   echo "Legs : " . $sungokong->legs = "2" . "<br>";
   echo "cold blooded : " . $sungokong->coldblooded . "<br>";
   echo "Yell : " . $sungokong->Yell = "Auooo" . "<br>"

   
?>






