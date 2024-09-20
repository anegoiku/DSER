<?php

$izenak = array(
    "ane" => "Ane Goikuria",
    "sofia" => "Sofia Cañabate",
    "jon" => "Jon Zabala",
    "anthony" => "Anton Tschanz",
    "pablo" => "Pablo Perucha",
    "ana" => "Mariana Conana"
);
echo("<h3> Arraya bistaratu:</h3> <br>");
foreach($izenak as $key => $value){
    echo "$key = $value <br>";
}

echo("<br><h3> Gakoaren arabera ordenatuta:</h3> <br>");
ksort($izenak);
foreach($izenak as $key => $value){
    echo "$key = $value <br>";
}

echo("<br><h3> Edukiaren arabera ordenatuta:</h3> <br>");
asort($izenak);
foreach($izenak as $key => $value){
    echo "$key = $value <br>";
}

