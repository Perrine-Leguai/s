<?php
    function pair($b){
        if ($b%2 == 0) {
            return $pair=true;
        }
        else {
            return $pair=false;
        }
    }

    $a=readline("Saisir un chiffre : ");
    if (pair($a)) {
        echo "Pair";
    }
    else echo "Impair";
?>
