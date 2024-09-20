<?php
    echo "<br>";
    
    $usuario1 = array(
        "izena" => "Ane",
        "abizena" =>"Goikuria",
        "nan" => "79175757M"
    );
    $usuario2 = array(
        "izena" => "Sofia",
        "abizena" =>"Canabate",
        "nan" => "77649087Y"
    );

    echo "<style> table, td{border: 2px solid black;}</style>";
    echo "<table><tr>";
    foreach ($usuario1 as $value) {
        echo "<td>" . " " . $value . " " . "</td>" ;
    };
    echo "</tr><tr>";
    foreach ($usuario2 as $value) {
        echo "<td>" . " " .$value . " " . "</td>";
    };
    echo"</tr></table>";

?>