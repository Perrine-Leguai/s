<?php
$i=1;
do {
    $a= readline("Saisir un nombre : ");
    if ($i==1 || $a>$max) {
        $max=$a;
        $j=$i;
        $i++;
    }        
} while ($a!=0);
   echo"le max est $max, qui a été tapé en position $j .";
?>
