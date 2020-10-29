<?php
$a=readline("Saisir un nombre: ");
$f=1;
for ($i=1; $i<=$a; $i++)
{
    $f = $f * $i;
}
echo "voila la solution " . $f;
?>