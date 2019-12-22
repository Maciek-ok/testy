<?php

//zmienne

$A=1;
$B=1;
$C=-2;

//Wyscwietlanie zmiennych

echo "Parametry rownania A=$A, B=$B, C=$C";

//sprawdzamy czy rownanie jest kwadratowym 

if ($A==0)
{
	echo"A jest rowne zero rowannie nie jest kwadratowe";
}
else{
	//A ruzne od zera rownanie kwadratowe
	$delta=$B*$B-4*$A*$C;
	if($delta<0){
		echo "rownainie nie ma rozwiazania w zborzez liczb zeczywistych";
	}
	else{
		//delta = 0
		if($delta==0){
			$wynik=-B/(2*$A);
			echo "rozwiazanie: x = $wynik ";
		}else{
				//delta wiedksza od zera
				$wynik=(-$B+sqrt($delta))/(2*$A);
				echo"Rozwiazanie: x1=$wynik";
				$wynik=(-$B-sqrt($delta))/(2*$A);
				echo"Rozwiazanie: x2=$wynik";
			}
	}
}
?>

