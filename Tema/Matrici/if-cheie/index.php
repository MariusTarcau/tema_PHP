<?php

$masini = array(
    "Nissan" => "Qashqai",
    "Ford" => "Puma",
    "Hyundai" => "Tucson",
    "Toyota" => "CH-R"

);

$nissan="Nissan";

if(array_key_exists($nissan,$masini)){
    echo "Cheia dvs. exista: " . $nissan;
}

else{
    echo "Cheia dvs. nu exista";
}

?>