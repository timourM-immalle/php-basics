<?php

// Maak een Array met 3 namen van medeleerlingen.
$collegae = array("Mathias", "Timour", "Karam");

// Itereer er over met een for-loop. Print ze af in een HTML-ongenummerde lijst.
echo '<ul>';
for ($i = 0; $i < count($collegae); $i++)
{
	echo '<li>' . $collegae[$i];
}

// Itereer er over met een foreach-loop. Print ze af in HTML-genummerde lijst.
echo '<ol>';
foreach ($collega as $collegae)
{
	echo '<li>' . $collega;
}


$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was. (Dus de letters 1 voor 1 afdrukken.)
$naam = "Willy";

echo '<ol>';
for ($i = 0; $i < strlen($naam); $i++)
{
	echo '<li>' . $naam[$i] . '</li>';
}
?>
