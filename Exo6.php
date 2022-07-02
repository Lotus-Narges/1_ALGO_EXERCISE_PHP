<?php

/*Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, 
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 € */


function facture ($prix, $quantite, $tva){
    $resultNoTax = $prix * $quantite;
    $finalPrice = $resultNoTax + (($tva / 100) * $resultNoTax);
    
    return "Prix unitaire de l’article : " . $prix ." € <br>"
           ."Quantité : " . $quantite . "<br>"
           ."Taux de TVA : " .$tva / 100 ."<br>"
           ."Le montant de la facture à régler est de : " . $finalPrice ." €" . "<br>";
}

echo facture(9.99, 5, 20);