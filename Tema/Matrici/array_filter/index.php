<?php

$matrice=array(1,2,3,5,7,9,13,12,15,16);

function filtrare($element){
    return $element%2 == 0;

}

$elemente_pare= array_filter($matrice, "filtrare");
print_r($elemente_pare);

?>