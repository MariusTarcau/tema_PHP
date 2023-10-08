<?php 

$numar1 = 8;

function bigger10($var1){
    if($var1>10){
        echo "numarul este mai mare decat 10.";
    }
    
    else{
        echo "numarul nu este mai mare decat 10";
    }
}

$rezultat = bigger10($numar1);
echo $rezultat;



?>