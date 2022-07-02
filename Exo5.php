<?php

/*Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
Affichage :
Montant en francs : 100
100 francs = 15.24 €  */

function convert ($franc){
    $euro = round($franc * 0.1524, 2);
    return $euro;
}

$franc = 100;

echo "Montant en francs : " .  $franc . "<br>" 
. $franc . " francs = " . convert($franc) . " € <br>";

