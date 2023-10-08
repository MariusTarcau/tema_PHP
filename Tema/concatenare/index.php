<?php

$intro="Eu sunt Marius. ";
$catel="Iar el este catelul meu Patrocle.";

function concatenare($intro,$catel){
    return $intro . $catel;
}

$prezentare = concatenare($intro,$catel);
echo $prezentare;

?>