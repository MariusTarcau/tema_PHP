<?php 
$numar = 1.5; 

if (is_int($numar)) {
    echo "Variabila conține un număr întreg.";
}

 elseif (is_float($numar)) {
    echo "Variabila conține un număr zecimal.";
} 

else {
    echo "Eroare";
}

?>