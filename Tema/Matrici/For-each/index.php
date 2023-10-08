<?php
$pasiuni = array(
    array("animale", "citit", "programat", "sporturi")
);

foreach ($pasiuni as $rand) {
    foreach ($rand as $element) {
        echo $element . ' ';
    }
}
?>