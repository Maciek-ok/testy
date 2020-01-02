<?php

function func()
 {static $liczba=10;
echo "\$liczba=$liczba. <br>";
$liczba+=20;
}
func();
func();
?>

