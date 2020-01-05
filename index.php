<?php
if(!$fd=fopen('strona.txt', 'r')){
echo "nie udało sie otorzyc pliku";
}
else
{
	$fdc=fread($fd, 20);
	echo "wysiwetla sie plik: $fdc</br>";
	echo "<a href='http://localhost/testy/form.php'>zmiany pliku startowego</a></br></br>";
	
	
	include("$fdc");
}
	fclose($fd);
?>

