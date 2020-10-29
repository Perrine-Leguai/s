<?php
function multiplication($a){
   for ($i=1; $i<=10; $i++){
       echo "$a x $i = " . $a*$i. "\n";
   } 
}

$b=readline("Saisir un chiffre à multiplier : ");
echo multiplication($b);
?>