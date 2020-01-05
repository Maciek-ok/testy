<?php

$plik = $_GET['strona'];

if(!$fd=fopen("strona.txt", 'wb')){
echo "nie udało sie otorzyc pliku";
}
else
{
	if(fwrite($fd, $plik)===false){
		echo "wystapił błąd podczas zapisu";
	}else{
		echo "zmieniono stone w pliku na: $plik </br>";
		echo "<a href='http://localhost/testy/index.php'>strona glowna</a>";
	}
	fclose($fd);
}

	
?>

