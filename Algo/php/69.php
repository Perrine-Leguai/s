<?php
$somme=0;
for ($i=0; $i <= 8 ; $i++) {
    $tab[$i] = readline("entrez la valeur de la case $i : ");
    $somme= $somme + $tab[$i];
}
echo "la somme de la classe est de" . $somme
?>