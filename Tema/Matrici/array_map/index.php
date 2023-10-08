<?php

$matrice=array(1,2,3,4);

function tripleaza($element){
    return $element *3;
}

$rez = array_map("tripleaza",$matrice);
print_r($rez);

?>