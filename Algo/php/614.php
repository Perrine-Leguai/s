<?php
$a=readline("combien d'élèves? ");
$somme=0;
for ($i=1;$i<=$a;$i++){
    $note[$i]= readline("rentrer la note de l'élève ");
    $somme=$somme+$note[$i];
}
$moy=$somme/$a;
$j=0;
for ($i=1;$i<=$a;$i++){
    if ($note[$i]> $moy) $j=$j+1;
}
echo "il y a " . $j . " notes supérieures à la moyenne"

?>