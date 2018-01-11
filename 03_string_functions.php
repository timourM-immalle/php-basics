<?php

$zin = "Binnenkort is het weeral lente";

// Print af hoeveel woorden $zin bevat.
echo str_word_count($zin);

// Vervang in $zin "lente" door "zomer" en druk af.
$woorden = str_word_count($zin, 1);
$seizoen = array_search("lente", $woorden); //heeft een 0 based index
$vervanging = array($seizoen => "zomer");
$nieuweWoorden = array_replace($woorden, $vervanging);

echo '<br>' . implode(" ", $nieuweWoorden) . "." . '<br>';

?>
