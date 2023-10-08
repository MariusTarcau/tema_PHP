<?php

$text="Acesta este un text scris cu litere mici in cod, dar pe care tu il vei primi cu litere mari. ";

function Majuscule($text){
    return strtoupper($text);
}

$majuscule = Majuscule($text);
echo $majuscule;


?>