<?php

$camere = array(
    "camera1"=>"dormitor",
    "camera2"=>"livingroom",
    "camera3"=>"bucatarie",
    "camera4"=>"baie",
    "camera5"=>"dormitor"
);

$camera2="camera2";

if(array_key_exists($camera2,$camere)){
    echo "Camera selectata de dvs. este " . $camere[$camera2];
}

else{
    echo "camera dvs. nu a fost gasita";
}

?>