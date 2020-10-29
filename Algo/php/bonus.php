<?php
function pyramide($v){
    $f=$v+1;
    for ($i=$f; $i>=1; $i-=1){
        for ($j=$i; $j>=1; $j-=1){
            echo $i-1;

        }
        echo "\n";
    }
}

$c=readline ("saisir un ombre : ");
pyramide($c);
?>
