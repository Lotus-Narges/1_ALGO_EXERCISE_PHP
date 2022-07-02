<?php

/* Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, 
alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
Affichage :
Age : 32
Sexe : F
La personne est imposable. */

function imposable ($age, $sexe){
    if ($sexe == "F" && $age >= 18 && $age <= "35" ){
        echo "Age : $age <br> Sexe : $sexe <br> La personne est imposable.";
    }elseif($sexe == "M" && $age >= 20){
        echo "Age : $age <br> Sexe : $sexe <br> La personne est imposable.";
    }else{
        echo "La personne n'est pas imposable.";
    }
}

imposable(24, "F");


/* Pour l'exercice 9, 
on peut tout mettre dans le IF en utilisant l'opérateur logique OU (OR ou || ) afin de limiter les conditions*/