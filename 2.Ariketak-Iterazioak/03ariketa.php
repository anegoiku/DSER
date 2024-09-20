<?php
$boolean=TRUE;
$i= rand(0, 99);

if($boolean){
    for($x=2; $x<$i; $x++){
        echo $x. "<br>";
        $x+=1;
    }
    
}else{
    for($x=1;$x<$i;$x++){
        echo $x. "<br>";
        $x+=1;
    }
}
?>