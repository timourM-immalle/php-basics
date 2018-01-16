<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt

for ($i = 0; strlen($woord); $i++)
{
	$letter = $woord[$i];
	
	switch ($letter)
	{
		case "q":
		   $punten += 10;
		   break;
		case "u":
		   $punten += 4;
		   break;
		case "g":
		   $punten += 3;
		   break;
		case "t" || "r":
		   $punten += 2;
		   break;
		case "o" || "e" || "i" || "n":
		   $punten += 1;
		   break;
	}
}

?>
