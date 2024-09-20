<?php 
$prod= array("Botak", "Takoiak", "Sandaliak", "Zapatilak", "Alpargatak");
$prez= array(90, 80, 30, 50, 20);
$behe= 20;

echo "<h3>Beherapenak baino lehen</h3>";
echo "<style> table, td, th{border: 2px solid black;}</style>";
echo "<table><tr>";
    foreach ($prod as $value) {
        echo "<th>" . " " . $value . " " . "</th>" ;
    };
    echo "</tr><tr>";
    foreach ($prez as $value) {
        echo "<td>" . " " .$value . " " . "</td>";
    };
    echo"</tr></table>";

echo "<br><h3>Beherapenekin</h3>";
echo "<style> table, td, th{border: 2px solid black;}</style>";
echo "<table><tr>";
    foreach ($prod as $value) {
        echo "<th>" . " " . $value . " " . "</th>" ;
    };
    echo "</tr><tr>";
    foreach ($prez as $value) {
        $pbehe=($behe/100)*$value;
        $pberri=$value-$pbehe;
        echo "<td>" . " " .$pberri. " " . "</td>";
    };
    echo"</tr></table>";

?>