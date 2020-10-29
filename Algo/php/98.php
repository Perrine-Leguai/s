<?php
function position($alpha, $a){
    $tabAlpha= str_split($alpha,1);
    $n= count($tabAlpha);
    for ($i=0; $i<$n-1; $i++) {
       if ($tabAlpha[$i]==$a){
           return $i;
       } 
   }return -1;
}

function chiffrer($x){
    $tabAlpha= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $permut = "HYLUJPVREAKBNDOFSQZCWMGITX";
    $tabPermut= str_split($permut,1);
    $tabX=str_split($x,1);
    $m= count($tabX);

    for ($i=0; $i<=$m-1; $i++){
        $pos= position($tabAlpha,$tabX[$i]);
        $tabX[$i]=$tabPermut[$pos];
    }
    return print_r($tabX);
}


$mot=readline("Saisir un mot à crypter : ");

chiffrer($mot);

?>