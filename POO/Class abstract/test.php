<?php

include_once 'Personne.php';
include_once 'Developpeur.php';
include_once 'Manager.php';

$dev1= new Developpeur;
$dev1->setId(1)->setNom('Durand')->setPrenom('Joséphine')->setEmail('jajo@gmail.com')->setTelephone('0607080910')->setSalaire(1234.5)->setSpecialite('Front-end');

$dev2= new Developpeur;
$dev2->setId(2)->setNom('Frontini')->setPrenom('Marc')->setEmail('marco@gmail.com')->setTelephone('0102030405')->setSalaire(2345.6)->setSpecialite('Back-end');

$man1= new Manager;
$man1->setId(3)->setNom('Ferrer')->setPrenom('Amélie')->setEmail('amel@gmail.com')->setTelephone('0104070205')->setSalaire(1500.10)->setService('Informatique');

$man2= new Manager;
$man2->setId(4)->setNom('Picolo')->setPrenom('Florian')->setEmail('flo@gmail.com')->setTelephone('0607080910')->setSalaire(2400.24)->setService('Recherche');


echo $dev1->sePresenter() . "\n";
echo $dev2->sePresenter(). "\n";
echo "Counter : " . Personne::$counter . "\n";

echo $man1->sePresenter() . "\n";
echo $man2->sePresenter() . "\n";
?>