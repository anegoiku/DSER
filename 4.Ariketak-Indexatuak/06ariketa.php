<?php
$zen=array();
for($i=0;$i<10;$i++){
    $zen[$i]=rand(0, 99);
}
var_dump($zen);
echo("<br>");
$gehi=0;
for($i=0;$i<count($zen);$i++){
$gehi=$gehi+$zen[$i];
}
$bataz= $gehi/count($zen);
echo("Zenbakien bataz bestekoa: ". $bataz);
?>