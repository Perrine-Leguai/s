<?php
$tab[0]=1;
$tab[1]= -12;
$tab[2]=26 ;
$tab[3]= 27;
$tab[4]= 0;

$b= count($tab);
$yaPermute = true;
while ($yaPermute) {
    $yaPermute = false;
    for ($i=0; $i<=$b-2; $i++) {
        if ($tab[$i] < $tab[$i+1] ) {
                $temp=$tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$temp;
                $yaPermute = true;
        }
    }
}

print_r ($tab);


?>
