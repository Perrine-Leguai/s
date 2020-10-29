<?php
$dicto=array_combine(range(1,26), range('A','Z'));
$indiceD=1;
$indiceF=26;

$banco=false;
$mot=readline("Saisissez un mot à rechercher : "); 
do {
$indiceM=($indiceD+$indiceF)/2;
$m=intval($indiceM);
    if ($mot>$dicto[$m]){
        $indiceD=$m+1;
    }
    elseif ($mot<$dicto[$m]) {
        $indiceF=$m-1;
    }
    elseif ($mot=$dicto[$m]) {
        $banco=true;
        break;
    }
    
        
} while ( $indiceD<=$indiceF);

if ($banco) {
    echo ("Mot trouvé ! ");
}
else {
    echo ("Mot inconnu...");
}
?>