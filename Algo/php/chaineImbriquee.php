<?php 
function apparition($aa,$b) {
    $cpt=0;
    $trouve=false;
    for ($i=0; $i<=strlen($aa);$i++){
        if ( $aa[$i]==$b[0]){
            if ($i<strlen($aa)){
                $k=$i+1;
                $trouve=true;      
                for ($j=1; $j<strlen($b); $j++){
                    if ($b[$j]!= $aa[$k]){
                        $trouve=false;
                        $j=strlen($b);
                    }
                    $k++;
                }
                if ($trouve){
                    $cpt++;
                }
            }
            elseif (strlen($b)==1){
                $cpt++;
            }   
        }
    }
    return $cpt;
}
$phrase = readline("Saisir une phrase : ");
$mot= readline("Quel mot cherchez vous ? ");
echo "la chaine de caractères " . $mot . " apparait ". apparition($phrase, $mot) . "fois dans $phrase .";
?>