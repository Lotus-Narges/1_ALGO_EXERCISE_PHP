<?php

//  http://localhost:8888/ALGO-PHP-PART1/Exo1.php
//  https://youtu.be/gDfUT0Bm2m4
/*
Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).
Affichage :
La phrase « Notre formation DL commence aujourd’hui » contient 39 caractères. 
*/

$phrase = "Notre formation DL commence aujourd'hui";
echo "La phrase" . " " . $phrase . " " ."contient" . " " . strlen($phrase) . " " ."caractères.";
