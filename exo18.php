<?php

function recursive(int $n,int $m) {
    if($m === 0){
        return 0;
    }
    return $n + recursive($n,$m-1);
}
echo recursive(4,5);