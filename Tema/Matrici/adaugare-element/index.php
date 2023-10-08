<?php 


$matrice = array(1,2,3);
$element=4;
function adaugare(&$matrice,$element){
    array_push($matrice,$element);
}

adaugare($matrice,$element);

print_r($matrice);

?>