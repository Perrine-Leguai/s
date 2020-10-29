<?php
$b= readline("Combien de cases de tableaux ? ");

for ($i=0; $i<$b; $i++){
    $d=$i+1;
    $tab[$i]= readline ("Nombre n° $d : ");
}

$x=readline("Quelle case souhaitez vous supprimer ? ")-1;
for ($i=$x; $i<$b-1;$i++) {
    $tab[$i]=$tab[$i+1];
}
unset ($tab[$b-1]);
print_r($tab);
?>