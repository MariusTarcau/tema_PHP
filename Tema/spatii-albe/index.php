<?php

$sir="Acesta este un sir fara spatii albe";

function eliminare($sir){
    $sir_fara_spatii=trim($sir);
    return $sir_fara_spatii;
}


$sir_fara_spatii=eliminare($sir);
 echo "Textul fără spații albe: '$sir_fara_spatii'";


?>