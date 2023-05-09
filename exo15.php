<?php
function add(int $a):int{
    return $a+=5;
}

$a = [17, "saucisse", -3.12, -547]; // pour voir toutes les possiblités 

foreach ($a as $a) {
    if(!is_int($a)){
        echo "ERROR<br>"; 
    }else{
        echo add($a)."<br>";
    }
}