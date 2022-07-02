<?php
/* A partir d’un montant à payer et d’une somme versée pour régler un achat, 
écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, 
de pièces de 2 € et 1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 € *************************************************** Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € */

// int intdiv($dividend, $divisor)

$payed = 200;
$price = 152;
$difference = 48;

$ten = intdiv($difference, 10);
$difference = $difference - ($ten * 10);
$five = intdiv($difference, 5);
$difference = $difference - ($five * 5);
$two = intdiv($difference, 2);
$difference = $difference - ($two * 2);
$one = intdiv($difference, 1);

echo "Montant à payer : " . $price . " € <br>
Montant versé : " . $payed . " € <br>
Reste à payer : " . $difference . "€ *************************************************** Rendue de monnaie : <br>" .
$ten . " billets de 10 € - " . $five . " billet de 5 € - " . $one . " pièce de 2 € - " . $one . " pièce de 1 € ";


