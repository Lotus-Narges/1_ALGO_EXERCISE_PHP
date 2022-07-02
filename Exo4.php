<?php

/* Ecrire un algorithme permettant de savoir si une phrase est palindrome.
Affichage :
La phrase « Engage le jeu que je le gagne » est palindrome */

$phrase = " Engage le jeu que je le gagne ";
$newPhrase = str_replace(" ", "", $phrase);
$lowerPhrase = strtolower($newPhrase);
$reversePhrase = strrev($lowerPhrase);


if ($lowerPhrase == $reversePhrase){
    echo "$phrase est palindrome. " ;
} else{
    echo "$phrase n'est pas palindrome.";
}


