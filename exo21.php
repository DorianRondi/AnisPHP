<?php
function search(array $a, int $element){
    if(!count($a)){
        return "Aucune occurence trouvée";
    }
    $key = array_key_first($a);
    if($a[$key] === $element){
        return $key;
    }else{
        unset($a[$key]);
    }
    return search($a,$element);
}

$a = [4, 3, 2, 1, 5];
?>

<section>
    <h2>Exercice 21</h2>
    <div>
        <p>
            <?= "Search : " . search($a, 1) . "<br/>"; ?>
        </p>
    </div>
</section>