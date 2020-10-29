<?php
$somme=0;
do { 
    $a=readline(" saisir prix ou 0 si plus d’articles ");
    $somme= $somme + $a;
}while (!$a==0);
echo "Voici la somme à payer $somme \n";
$b= readline("Somme pour payer ");
$b= $b-$somme ;
 $d = $b/10 ; 
$c = ($b%10) /5 ;
$e = $b%5 ;
echo " rendu de " . intval($d) ."billets de 10€ " . intval($c) . "billets de 5€ et " . intval($e) . "pièces de 1€"

?>