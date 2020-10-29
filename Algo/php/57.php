<?php
$i=1;
$j=1;
for ($i=1; $i<=3; $i++) 
{
    $a= readline("Saisir un nbr");
    if ($i==1) {
        $max=$a;
    }
    else if ($i>1 && $a>$max) {
        $max=$a ; 
        $j=$i;
    }
}
echo "le plus grand nombre est ".$max . "il est sorti en position " . $j;
?>