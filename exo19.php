<?php
function recursive($n){
    if($n === 0){
        return 1;
    }
    return $n * recursive($n-1);
}

echo recursive(4);