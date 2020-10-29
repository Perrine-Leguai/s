<?php

$X=22;
while ($X<10 || $X>20)
{
echo ("Saisissez un nbr");
$X = readline("Saisissez un nbr");

if ($X<10) echo("Plus grand!");
elseif ($X>20) echo("Plus petit!");
}

echo("C'est Parfait !")
?>