<?php
$n = readline ("saisir le nombre de chevaux en course\n");
$p =readline ("Nombre de chevaux joués");
$pdta = 1;
for ($i=1; $i<=$n; $i++) {
        $Pdta = $pdta*$i ;
    }	
$pdtb = 1 ;
for ($i=1; $i<= ($n-$p); $i++) {		  
        $pdtb = $pdtb*$i ;
    }	
$pdtc = 1 ;
for ($i=1 ; $i<=$p ; $i++) 	{
        $pdtc=$pdtc*$i ;
    }
$x = $pdta/ $pdtb;
$y = $x /$pdtc;

echo  "Dans le désordre : une chance sur " .$y . "de gagner\n"  ;
echo  "Dans le désordre : une chance sur " .$x . "de gagner\n"  ;
?>