<?php

/*A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.
Affichage :
La phrase « Notre formation DL commence aujourd’hui » contient 5 mots. */

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);

echo "La phrase « $phrase » contient $nbMots mots.";