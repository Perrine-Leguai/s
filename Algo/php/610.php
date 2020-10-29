<?php
$tab[0]=4;
$tab[1]=8;
$tab[2]= 7;
$tab[3]= 9;
$tab[4]= 1;
$tab[5]= 5;
$tab[6]= 4;
$tab[7]=6;

$tab2[0]=7;
$tab2[1]=6;
$tab2[2]= 5;
$tab2[3]= 2;
$tab2[4]= 1;
$tab2[5]= 3;
$tab2[6]= 7;
$tab2[7]=4;

  for ($i=0; $i<=7; $i++){
    $tab3[$i]= $tab[$i] + $tab2[$i];
  echo $tab3[$i]." ";
}
 
?>
