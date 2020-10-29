<?php
$a=readline ("Cb de nombre souhaitez vous entrer ? ");
$x=0;
for ($i=1; $i<=$a; $i++) {
    $b= readline ("saisir un nombre ");
    $tab[$i]= $b+1;
    if ($tab[$i]<0) $x=$x+1;
}
    $y=$a-$x;

    echo "il y a " . $x . " valeur(s) négative(s) et " . $y . " valeur(s) positive(s)."

?>