<?php

/* Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans /Pupille : entre 8 et 9 ans /Minime : entre 10 et 11 ans /Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime » */


function childCategory ($age){
    if ($age >= 6 && $age <= 7){
        $result = "Poussin"; 
    }elseif ($age >= 8 && $age <= 9){
        $result = "Pupille";
    }elseif ($age >= 10 && $age <= 11){
        $result = "Minime";
    }elseif($age >= 12){
        $result = "Cadet";
    }
    return $result;
}

$childAge = 10;
childCategory($childAge);

echo "L’enfant qui a " . $childAge ." ans appartient à la catégorie " . "« " . childCategory($childAge) . " » . " ;