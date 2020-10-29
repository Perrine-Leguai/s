<?php
include_once('Personne.php');
include_once('Etudiant.php');
include_once('Employe.php');
include_once('Professeur.php');


//PERSONNES

$pers1 = new Personne(101, "Durand", "Joséphine");
$pers2 = new Personne(102, "Frontini", "Marc");
$pers3 = new Personne(201, "Karamoko ", "Kevin");
$pers4 = new Personne(202, "Siñare", "Carolina");
$pers5 = new Personne(801, "Bingale", "Jean");
$pers6 = new Personne(802, "Leguai", "Perrine");


// ETUDIANT.E.S

$etu1 = new Etudiant ("1549782FGH6321", $pers5->getId(), $pers5->getNom(), $pers5->getPrenom());
$etu2 = new Etudiant ("123456JIHU4569", $pers6->getId(), $pers6->getNom(), $pers6->getPrenom());

//EMPLOYE.E.S
$emp1 = new Employe (2000.56, $pers3->getId(), $pers3->getNom(), $pers3->getPrenom());
$emp2 = new Employe (1234.56, $pers4->getId(), $pers4->getNom(), $pers4->getPrenom());

// PROFESSEURS
$prof1 = new Professeur ("Mathématiques", $emp1->getSalaire(), $pers1->getId(), $pers1->getNom(), $pers1->getPrenom());
$prof2 = new Professeur ("EPS", $emp2->getSalaire(), $pers2->getId(), $pers2->getNom(), $pers2->getPrenom());

echo "ETUDIANTS \n" .$etu1 .  "\n" ;
echo $etu2 .  "\n" ;
echo "\n EMPLOYES \n" . $emp1 .  "\n" ;
echo $emp2 .  "\n" ;
echo "\n PROFESSEURS \n" . $prof1 .  "\n" ;
echo $prof2 .  "\n" ;

?>