<?php
$tabMot=readline ("Tapez une phrase : \n");
$comp= str_split($tabMot,1);
$t= count($comp);
$tabVoyelle[0]="a";
$tabVoyelle[1]="e";
$tabVoyelle[2]="i";
$tabVoyelle[3]="o";
$tabVoyelle[4]="u";
$tabVoyelle[5]="y";
$tabVoyelle[6]="A";
$tabVoyelle[7]="E";
$tabVoyelle[8]="I";
$tabVoyelle[9]="O";
$tabVoyelle[10]="U";
$tabVoyelle[11]="Y";


$newTab= array_diff($comp, $tabVoyelle);
$nt= count($newTab);
$nv=$t-$nt;

echo "Il y a $nv voyelles dans votre phrase."

?>