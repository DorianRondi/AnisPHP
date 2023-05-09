<?php
function isPrime(int $nbre)
{
    $list = [];
    $reel = 2;
    while (count($list) < $nbre) {
        $prime = false;
        for($i = 1; $i < $reel; $i++){

            if($reel % $i === 0){
                break;
            }else{
                $prime = true;
            }
        }

        if ($prime){
            $list[] = $reel;
        }
        $reel++;
    }
    return $list;
}

$input = 5;

if (!is_int($input) || $input < 1) {
    echo "ERROR Not an Integer";
} else {
    foreach (isPrime($input) as $item) {
        echo $item . "<br>";
    }
}
