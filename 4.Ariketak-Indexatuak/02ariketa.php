<?php 
$prod= array("Botak", "Takoiak", "Sandaliak", "Zapatilak", "Alpargatak");
$prez= array("90€", "80€", "30€", "50€", "20€");
echo "<style> table,th, td{border: 2px solid black;width:100%;}</style>";
echo "<table><tr>";
    foreach ($prod as $value) {
        echo "<th>" . " " . $value . " " . "</th>" ;
    };
    echo "</tr><tr>";
    foreach ($prez as $value) {
        echo "<td>" . " " .$value . " " . "</td>";
    };
    echo"</tr></table>";
?>