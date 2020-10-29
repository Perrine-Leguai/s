<?php
$b= readline("Combien de cases de tableaux ? ");
$c=$b-1;
for ($i=0; $i<$b; $i++){
    $tab[$i]= readline ("Nombre n° $i : ");
}

for ($i=0; $i<$b/2; $i++){
    $temp=$tab[$i];
    $tab[$i]=$tab[$c-$i];
    $tab[$c-$i]= $temp;
}

print_r( $tab);
?>