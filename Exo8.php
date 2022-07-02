<?php

/*Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
Affichage (pour la table de 8) :
Table de 8 : 1x8=8
2 x 8 = 16
3 x 8 = 24 ...
Remarque : proposer 2 solutions avec 2 types de boucles.*/

function multiplication ($num){
    echo "FOR loop <br><br>";
    for ($i=1; $i<=10; $i++){
        echo $i ." * " .$num . " = " . $i * $num . "<br>";
    }
}
multiplication(8);
echo "<hr>";
echo "WHILE loop <br><br>";
$num = 8;
$i = 1;
while ($i <= 10){
    echo $i ." * " .$num . " = " . $i * $num . "<br>";
    $i++;
}

echo "<hr>";
echo "FOREACH loop <br><br>";
foreach (range(1, 10) as $i){
    echo $i ." * " .$num . " = " . $i * $num . "<br>";
}


