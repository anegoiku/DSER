<?php
$zen=array();
for($i=0;$i<10;$i++){
    $zen[$i]=rand(0, 200);
}
echo("Relacion de numeros aleatorios: <br>");
for($i=0;$i<count($zen);$i++){
    echo ($zen[$i]. " ");
    }

echo("<br> Otra forma de visualizar los datos de un array <br>");
var_dump($zen);

echo("<br>Relacion de numeros aleatorios al reves: <br>");
print_r(array_reverse($zen));
?>