<?php

$animale=array("vaca","porc","cal","iepure","gaina");

function afisare($animale){
    return count($animale);
}

echo "Numarul de elemente din matrice este: " . afisare($animale);



?>