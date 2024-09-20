<?php 
if(!(defined("PI"))){
    define('PI', 3.14);
  
}
$r=5;
$per=2*PI*$r;
$az=2*PI*$r**2;
echo("Perimetroa: $per <br>". "Azalera: $az");
?>