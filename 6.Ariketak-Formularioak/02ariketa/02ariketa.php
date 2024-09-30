<?php 
//IZENA
if(!empty($_POST["izena"])){
    echo "Zure izena: ". $_POST["izena"];
}else{
    echo '<span style= "color:red;">EZ DUZU IZENA JARRI</span>';
}
echo "<br>";

//ABIZENA
if(!empty($_POST["abizena"])){
    echo "Zure abizena: ". $_POST["abizena"];
}else{
    echo '<span style= "color:red;">EZ DUZU ABIZENA JARRI</span>';
}
echo "<br>";

//ADINA
if(!empty($_POST["adina"])){
    echo "Zure adina: ". $_POST["adina"];
}else{
    echo '<span style= "color:red;">EZ DUZU ADINA JARRI</span>';
}
echo "<br>";

//PISUA
if(!empty($_POST["pisua"])){
    echo "Zure pisua: ". $_POST["pisua"];
}else{
    echo '<span style= "color:red;">EZ DUZU PISUA JARRI</span>';
}
echo "<br>";

//SEXUA
if(!empty($_POST["sexua"])){
    echo "Zure sexua: ". $_POST["sexua"];
}else{
    echo '<span style= "color:red;">EZ DUZU SEXUA JARRI</span>';
}
echo "<br>";

//EGOERA
if(!empty($_POST["egoera"])){
    echo "Zure egoera zibila: ". $_POST["egoera"];
}else{
    echo '<span style= "color:red;">EZ DUZU EGOERA ZIBILA JARRI</span>';
}
echo "<br>";

//AFIZIOAK
if(!empty($_POST["afizioak"])){
    echo "Zure afizioak: ";
    foreach($_POST["afizioak"] as $afizioa){
    echo " -".$afizioa;
    }  
}else{
    echo '<span style= "color:red;">EZ DITUZU AFIZIOAK JARRI</span>';
}
echo "<br>";
echo "<a href='02ariketa.html'>Bueltatu formulariora</a>";
?>