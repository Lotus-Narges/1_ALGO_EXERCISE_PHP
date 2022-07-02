<?php

/* Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau 
et d’en afficher le contenu (une marque de voiture par ligne). 
Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau➔« Peugeot », « Renault », « BMW », « Mercedes »
Affichage (attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau : Peugeot
Renault
BMW
Mercedes  */

$cars1 = ["Peugeot", "Renault", "BMW", "Mercedes"];
$cars2 = [];

/* 
for ($i=0; $i<count($cars1); $i++){
    if ($cars1[i] <> $cars1[i+1]){
        $cars2 = $cars2 + $cars1[i];
    }
    echo "Il y a" . count($cars2) . "marques de voitures dans le tableau : <br>";
    for ($j=0; $j<count($cars2); $j++){
        echo $cars2[j] . "<br>";
    }
} 
*/

echo "Il y a " . count($cars1) . " marques de voitures dans le tableau : <br>";
for($i=0; $i<count($cars1); $i++){
    echo $cars1[$i] . "<br>";
}


//Pour le 11, comme on en avait parlé, on peut simplifier avec un foreach
