<?php
    $primo = true;
    $num = $_GET["num"];
    for ($i=2; $i < $num ; $i++) { 
       
        if ($num % $i == 0 ) {
            $primo = false;
            break;
        }
    }
        if ($primo) {
            echo ("Es primo");
        }else{
            echo ("No es primo");
        }
?>