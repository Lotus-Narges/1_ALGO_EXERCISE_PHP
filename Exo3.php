<?php
/*A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». 
Afficher l’ancienne et la nouvelle phrase. */


//str_replace (find, replace, string);

$phrase = "Notre formation DL commence aujourd'hui";
$original = "aujourd'hui";
$replacement = "demain";
$replaced = str_ireplace($original, $replacement, $phrase);
echo $phrasebr;
echo $replaced; 



