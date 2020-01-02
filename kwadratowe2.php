<?php
//zmienna jest rowna 10 lub 20 oraz gdy jest ruzna 10 i 20
$liczba=15;

switch($liczba){
case (($liczba==10) or ($liczba==20)):
 echo "zmienna to 10 lub 20";
break;
case (($liczba!=10) or ($liczba!=20)):
echo "zmienna to nie 10 lub 20";
break;
//defult:
//echo"zmiena to ani 10 ani 20 ani nie jett od nich ruzna";
}

?>

