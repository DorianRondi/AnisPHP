<?php
function fibo(int $n)
{
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }
    return fibo($n - 1) + fibo($n - 2);
}

$n = 8;

if (!is_int($n) || $n < 0) {
    echo "error!";
}else{
    echo fibo($n);
}