<?php

/* Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; 
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
Affichage :
Michel DUPONT a ... ans
Alice DUCHEMIN a ... ans
  
Affichage (si la date courante est le 21/05/2018 et la date de naissance le
17/01/1985 : */
   
/*
DateTime();
$diff = date_diff( , );
echo $diff -> format("DD/MM/YY");
*/

class Personne {
    private string $_lastName;
    private string $_firstName;
    private DateTime $_birthDate;

    public function __construct(string $lastName, string $firstName, string $birthDate){
        $this -> _lastName = $lastName; 
        $this -> _firstName = $firstName;
        $this -> _birthDate = new DateTime($birthDate);
    }

    public function getLastName(){
        return $this -> _lastName;        //We dont need the $ signe here.
    }
                                          // Setters are just for modification
    public function getFirstName(){       // Getters are just for getting the value
        return $this -> _firstName;
    }

    public function getBirthDate(){
        return $this -> _birthDate;
    }


    public function dateDiff () {
        $currentDate = new DateTime();
        $interval = date_diff($currentDate , $this->getBirthDate());
        return $interval -> format("%Y");
    }

    public function __toString(){            //convert the objects to string, we wont need to call each of them individually
        return $this->_firstName." ".$this->_lastName." a ".$this->dateDiff(). " ans.<br>";
    }
}

$personne1 = new Personne ("DUPONT", "Michel", "1980-02-19");
$personne2 = new Personne ("DUCHEMIN", "Alice", "1985-01-17");

echo $personne1 ;
echo $personne2 ;