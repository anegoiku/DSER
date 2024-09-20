<?php
$zenbakiak=[];
//Arraya definitu
for ($i=0;$i<50;$i++){
    $zenbakiak[]=0;
}
//Ausazko zenbakiak eta kontagailua
for ($i=0;$i<50;$i++){
    $zenb=rand(0,49);
    $zenbakiak[$zenb]+=1;
}
//Pantailatik erakutsi
for ($i=0;$i<count($zenbakiak);$i++){
    echo $i." zenbakia ".$zenbakiak[$i]." aldiz atera da.<br>";
}
?>