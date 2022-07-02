<?php
/* A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective 
(français➔« Salut », anglais➔« Hello », espagnol➔« Hola »)
Exemple : tableau➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
Affichage :
Salut Mickaël
Hola Virgile
Hello Marie-Claire  */

$personna = [
    "Mickaël" => "fra",
    "Virgile" => "esp",
    "Marie-Claire" => "eng"
];

foreach ($personna as $prenom => $value) {
    if ($value == "fr"){
        echo "Salut $prenom <br>";
    }elseif ($value == "esp"){
        echo "Hola $prenom <br>";
    }else{
        echo "Hello $prenom <br>";
    }
}

