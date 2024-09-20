<?php 
$min= 4;

if($min>=0 && $min<=3){
    echo("Deiak 10 zentimo balio ditu.");
}elseif($min>3){
    $dif =$min-3;
    $tot= 10+$dif*5;
    echo("Deiak $tot zentimo balio ditu.");
}
?>