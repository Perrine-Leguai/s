<?php
$tabMot=readline ("Tapez une phrase : \n");
$delimiter = " ";
$nbr = explode ($delimiter, $tabMot);
$v=count($nbr);
echo "la phrase contient $v mots.";
?>