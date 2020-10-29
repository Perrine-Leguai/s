<?php
$a=0;
$b=0;
do {
    $a+=1;
    $tab[$a]= readline("Entrer un premier chiffre : ");
if ($tab[$a]<0) {
    $tab[$a]= readline("Merci de ressaisir un nombre positif : ");
}
if ($tab[$a]==0){
break;
}
$b+=1;
echo  $b . "\n";
}while ($tab[$a]>0);

$somme=0;
do {
$op= readline("Saisir une opération à effectuer entre : 'addition', 'moyenne', 'max', 'min' ou 'quitter' le système ");
switch($op){
    case "addition":
        for ($i=1; $i<=$b;$i++){
        $somme=$somme+$tab[$i];
    }
        echo $somme . "\n";
    break;
    case "moyenne":
        $moyenne=$somme/$b;
        echo $moyenne . "\n";
    break;
    case "max":
        for ($a=1; $a<=$b; $a++){
        if($a==1){
           $max=$tab[$a];
        }
        elseif ($tab[$a]>$max){
            $max=$tab[$a];
        }
    }
    echo "le maximum et $max . \n";
    break;
    case "min":
        for ($a=1; $a<=$b; $a++){
        if($a==1){
           $min=$tab[$a];
        }
        elseif ($tab[$a]<$min){
            $min=$tab[$a];
        }
    }
    echo "le minimul est $min . \n";
    break;
    
}
}while ($op != "quitter");
?>