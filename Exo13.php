<?php

/* Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau 
(pas de coefficient). Elle devra être affichée avec 2 décimales.
Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9 
Sa moyenne générale est donc de : 11.22 */

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$sommeNotes = array_sum($notes);
$countNotes = count($notes);
$moyenne = round($sommeNotes / $countNotes, 2);



echo "Les notes obtenues par l’élève sont : ";

for ($i=0; $i<$countNotes; $i++){ 
    echo $notes[$i] . " "; 
}

echo "<br> Sa moyenne générale est donc de : " . $moyenne;
