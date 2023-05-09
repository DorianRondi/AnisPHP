<?php

function piramide(int $lines)
{
    for($i = 1; $i <= $lines; $i++){
        for($j = 0; $j < $i; $j++){
            echo $i;
        }
        echo "<br>";
    }
}

$input = 50;

if (!is_int($input) || $input < 1) {
    echo "ERROR Not an Integer";
} else {
    piramide($input);
}
