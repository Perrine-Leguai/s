<?php
function facto($a){
    $f=1;
    for ($i=2; $i<=$a ; $i++){
        $f = $f * $i;
    }
    return $f;
}

$nombre = readline("Saisir un nombre pour connaitre sa factorielle : ");
echo facto($nombre);
?>