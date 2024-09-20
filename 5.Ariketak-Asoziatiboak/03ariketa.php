<?php
$gehi=0;
$astea= array(
    "astelehena"=>"1",
    "asteartea"=>"3",
    "asteazkena"=>"44",
    "osteguna"=>"77",
    "ostirala"=>"22",
    "larunbata"=>"45",
    "igandea"=>"87"
);

foreach($astea as $eguna => $value){
    $gehi += $value;
}
$bataz= $gehi /count($astea);
var_dump($astea);
echo("<br> Asteko zenbaki guztien gehiketa: ". $gehi. "<br> Asteko zenbaki guztien batazbestekoa: ". $bataz);

?>