<?php
$zen=array(1, 2, 3, 4, 5, 1000, 6, 7, 8, 9);
$mod= -1;
for($i=0;$i<count($zen);$i++){
    if($zen[$i]>$mod){
        $mod=$zen[$i];
    }
}
echo ("Zenbakirik handiena: ". $mod);
?>