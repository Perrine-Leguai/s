<?php
$tab[0]= 1;
$tab[1]= 2;
$tab[2]= 3;
$tab[3]= 4;
$tab[4]= 5;
$tab[5]= 7;

$done=false;
$i=2;
do{ 
    if ($tab[$i] != $tab[($i-1)]+1) {
        $done=true;
    break;
    }
    $i+=1 ;
} while ($i<=5);
if ($done) echo "non consécutif " ;
else echo "consécutif ";
?>