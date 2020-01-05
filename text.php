<?php

if(!$fd=fopen('./text.txt', 'r'))
{
	echo("nie moe znalesc pliku");
}
else{
	while(!feof($fd)){

		$str=fgets($fd);
		$str=nl2br($str);
		echo ($str);
	}
	fclose($fd);
	}
	
?>

