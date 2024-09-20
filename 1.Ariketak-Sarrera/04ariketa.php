<?php 
$zen1=1;
$zen2=2;
$zen3=3;
echo("Behetik gora: <br>");
if($zen1<$zen2 && $zen2<$zen3){
    echo("$zen1, $zen2, $zen3");
}elseif($zen1<$zen3 && $zen3<$zen2){
    echo("$zen1, $zen3, $zen2");
}elseif($zen2<$zen1 && $zen1<$zen3){
    echo("$zen2, $zen1, $zen3");
}elseif($zen2<$zen3 && $zen3<$zen1){
    echo("$zen2, $zen3, $zen1");
}elseif($zen3<$zen1 && $zen1<$zen2){
    echo("$zen3, $zen1, $zen2");
}elseif($zen3<$zen2 && $zen2<$zen1){
    echo("$zen3, $zen2, $zen1");
}

echo("<br> Goitik behera: <br>");
if($zen1>$zen2 && $zen2>$zen3){
    echo("$zen1, $zen2, $zen3");
}elseif($zen1>$zen3 && $zen3>$zen2){
    echo("$zen1, $zen3, $zen2");
}elseif($zen2>$zen1 && $zen1>$zen3){
    echo("$zen2, $zen1, $zen3");
}elseif($zen2>$zen3 && $zen3>$zen1){
    echo("$zen2, $zen3, $zen1");
}elseif($zen3>$zen1 && $zen1>$zen2){
    echo("$zen3, $zen1, $zen2");
}elseif($zen3>$zen2 && $zen2>$zen1){
    echo("$zen3, $zen2, $zen1");
}
?>