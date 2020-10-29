<?php
$a = readline ("Cb de nombres souhaitez vous entrer ? ");
for ($i=1; $i<=$a; $i++){
    $tab[$i]= readline ("saisir un nombre: ");
    $max = $tab[1];
    if ($tab[$i]>$max) {
        $max=$tab[$i];
        $pos=$i;
    }
}

echo "le plus grand nombre est $max, situé en position n° $pos "
?>
