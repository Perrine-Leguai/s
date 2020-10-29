<?php
$sch =0;
$tab1[1]=4;
$tab1[2]=8;
$tab1[3]=7;
$tab1[4]=12;
$tab2[1]=3;
$tab2[2]=6;

for ($i=1; $i<=4; $i++){
    for ($j=1; $j<=2; $j++){
        $sch= $sch + $tab1[$i]* $tab2[$j];
        }   
}
echo $sch;
 
?>
