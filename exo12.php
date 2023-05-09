<?php
$a = 7;
$b = -0.32;

function puissance($a,$b){

    if(!is_numeric($a) || !is_numeric($b)){
        return "ERROR : Une entré n'est pas un nombre.";
    }
    return pow($a,$b);
    // return $a**$b; 
}

echo puissance($b,$a);