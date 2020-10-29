<?php
$cptp=0;
$cptn=0;
$cptz=0;
$n=readline("Combien de valeurs souhaitez vous entrer ?  \n");
for ($i=1;$i<=$n;$i++){
    $a= readline ("Chiffre n°$i: ");
    if ($a>0) $cptp +=1;
    elseif ($a<0) $cptn +=1;
    else $cptz +=1;
}
echo "il y a $cptp nombres positifs, $cptn nombres négatifs et $cptz nombres nuls."
?>