<?php
    $primo = true;
    $zen = $_GET["num"];

    for ($i = 2; $i <= $zen; $i++) {
        $primo = true; 

        for ($x = 2; $x < $i; $x++) {
            if ($i % $x == 0) {
                $primo = false; 
                break; 
            }
        }
    
        if ($primo) {
            echo ("<br>" . $i . "<br>");
        }
    }

?>