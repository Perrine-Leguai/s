<?php
$somme=0;
for ($i=0; $i <= 8 ; $i++) {
    $tab[$i] = readline("entrez la valeur de la case $i : ");
    $somme= $somme + $tab[$i];
}
foreach ($tab as $key => $value) {
    echo "$key => $value \n";
}
echo "la moyenne de la classe est de" . $somme/$i
?>