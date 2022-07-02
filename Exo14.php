<?php

/* Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
Affichage (si la date courante est le 21/05/2018 et la date de naissance le
17/01/1985 :
 Age de la personne : 33 ans 4 mois 4 jours */

//***********************************************************************
// The PHP date() function formats a timestamp to a more readable date and time.

$dates = [
    "currentDate" => [
        "year" => 2018,
        "month" => 05,
        "day" => 21,
    ],
    "birthDate" => [
        "year" => 1985,
        "month" => 01,
        "day" => 17,
    ]

    ];

$year = $dates["currentDate"]["year"] - $dates["birthDate"]["year"];
$month = $dates["currentDate"]["month"] - $dates["birthDate"]["month"];
$day = $dates["currentDate"]["day"] - $dates["birthDate"]["day"];

echo "Age de la personne : " . $year ." ans " . $month . " mois " . $day . " jours ";
