<?php

$a= readline("Entrer un premier chiffre : ");
$b=readline("Entrer un deuxième chiffre : ");

do {
$op= readline("Saisir une opération à effectuer entre : 'addition', 'multiplication', 'division' ou 'quitter' le système ");
switch($op){
    case "addition":
        $somme=$a+$b;
        echo $somme . "\n";
    break;
    case "multiplication":
        $mul=$a*$b;
        echo $mul . "\n";
    break;
    case "division":
        if($a==0){
            echo "On ne peut pas diviser $b par $a et la division de $a sera toujours nulle."  . "\n";
        }
        elseif ($b==0){
            echo "On ne peut pas diviser $a par $b et la division de $b sera toujours nulle."  . "\n";
        }
        else {$mulb=$a/$b;
        echo "la division de $a par $b est égale à $mulb"  . "\n";
            $mula=$b/$a;
        echo "la division de $b par $a est égale à $mulb"  . "\n";
        }
    break;
  
    
}
}while ($op != "quitter");
?>