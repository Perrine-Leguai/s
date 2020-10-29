<?php 
$tableau = array();
$nombre = readline("Entrez le nombre de case dans le tableau : ");
for ($i=0; $i < $nombre; $i++) { 
    $tableau[$i] = readline("Entrez la valeur de la case $i : ");
}
for ($i=0; $i < $nombre-1; $i++) { 
    $posmaxi = $i;
    for ($j=$i+1; $j < $nombre; $j++) { 
        if ($tableau[$j] > $tableau[$posmaxi]) {          
            $posmaxi = $j;
        }
    } 
    $temp = $tableau[$posmaxi];
    $tableau[$posmaxi] = $tableau[$i];
    $tableau[$i] = $temp;
}
print_r($tableau);
?>