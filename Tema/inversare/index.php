<?php
$sir="Acesta este un sir care va fi inversat";

function inversare($sir){
    $sir_inversat = strrev($sir);
    return $sir_inversat;
}

$sir_inversat = inversare($sir);

echo "Sirul inversat este: '$sir_inversat'";


?>