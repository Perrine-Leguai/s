<?php

include_once('Maison.php');
include_once('Batiment.php');

//BATIMENT

$batiment = new Batiment();
$batiment->setAdresse("33 impasse en basses terres, 21850 Saint Apollinaire")->setSuperficie(100);

$batiment1 = new Batiment();
$batiment1->setAdresse("143 bd Montebello, 59000 Lille")->setSuperficie(50.5);

$batiment2 = new Batiment();
$batiment2->setAdresse("8 rue des petits pavés, 45000 Orléans")->setSuperficie(78.4);

echo $batiment . "\n";
echo $batiment1 . "\n";
echo $batiment2 . "\n";


//MAISON

$maison = new Maison();
$maison-> setNbPieces(5)->setAdresse($batiment->getAdresse())->setSuperficie($batiment->getSuperficie());

$maison1 = new Maison();
$maison1-> setNbPieces(4)->setAdresse($batiment->getAdresse())->setSuperficie($batiment->getSuperficie());

$maison2 = new Maison();
$maison2-> setNbPieces(3)->setAdresse($batiment1->getAdresse())->setSuperficie($batiment1->getSuperficie());

$maison3 = new Maison();
$maison3-> setNbPieces(2)->setAdresse($batiment2->getAdresse())->setSuperficie($batiment2->getSuperficie());

echo $maison . "\n";
echo $maison1 . "\n";
echo $maison2 . "\n";
echo $maison3 . "\n";
?>