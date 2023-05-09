<?php
$alpha = 58;
$beta = 58;

function compare($alpha,$beta):string
{
    if(!is_int($alpha) || !is_int($beta)){
        return "L'une des entrées n'est pas un nombre entier";
    }
    $response = $alpha." vaut ".$beta;
    if($alpha > $beta){
        $response = $alpha." est plus grand que ".$beta;
    }elseif($alpha < $beta){
        $response = $beta." est plus grand que ".$alpha;
    }
    return $response;
}
echo compare($alpha, $beta);