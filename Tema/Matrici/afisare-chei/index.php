<?php

$numere = array(
    1=>"1",
    2=>"2",
    3=>"3",
    4=>"4",
    5=>"5"
);

function afisare_chei($numere){
    $numere1=array_keys($numere);
    return $numere1;
}

$numere1=afisare_chei($numere);

echo "Cheile matricei sunt: " .  implode(", ", $numere1) . ".";

?>