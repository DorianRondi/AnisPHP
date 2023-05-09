<?php
function isPrime(int $n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function primeList($taille){
    $liste = [];
    $i = 2;
    while($taille > count($liste)){
        
        if(isPrime($i)){
            $liste[] = $i;
        }
        $i++;
    }
    return $liste;
}

$input = 5;

if (!is_int($input) || $input < 1) {
    echo "ERROR";
} else {
    foreach (primeList($input) as $item) {
        echo $item . "<br>";
    }
}
