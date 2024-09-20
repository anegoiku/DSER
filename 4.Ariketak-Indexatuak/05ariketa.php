10 ausazko zenbaki(0 eta 99 bitartean) gorde array batean eta txikiena erakutsi.
<?php
$zen=array();
for($i=0;$i<10;$i++){
    $zen[$i]=rand(0, 99);
}
echo("<br>");
var_dump($zen);
echo("<br>");
$txik=1000000;
for($i=0;$i<count($zen);$i++){
    if($zen[$i]<$txik){
        $txik=$zen[$i];
    }
}
echo("Zenbakirik txikiena: ". $txik);
?>