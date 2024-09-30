<?php
if (!empty($_POST["izena"]) && !empty($_POST["pasahitza"])){
    echo "Ongi etorri ".$_POST["izena"]."<br>";
    echo "Pasahitza: ".$_POST["pasahitza"];
} else {
    echo "Datu guztiak sartu behar dira.";
}
?>