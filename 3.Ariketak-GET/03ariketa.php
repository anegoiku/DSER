<?php
$pares = $_GET["par"];
if ($pares = true) {
    $i = rand(0,100);
while ($i > 0) {
  $i-=2;
  echo $i . "<br>";
}
}else {
    $i = 1;     
    $n = rand(0,100);   
    $impar = 1; 
    while ( $i <= $n){
	echo "$impar <br />";
	$i = $i + 1;
	$impar = $impar + 2;
}
}

?>