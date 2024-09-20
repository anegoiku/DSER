<?php
$data1= new DateTime('now');
$data2= new DateTime('2025-01-01 12:00:00');
$dif= $data1 ->diff($data2);
echo $dif->format("Hegazkina irtetzeko falta den dembora: <br> Urteak: %y / Hileak: %m / Egunak: %d / Orduak: %h / Minutuak: %i / Segunduak: %s ");

?>