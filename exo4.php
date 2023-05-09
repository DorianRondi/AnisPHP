<?php
$age = -5;
$response = null;

if(!is_int($age) || ($age < 0)){
    $response = "Y a un problème";
}elseif($age < 18){
    $response = "Je suis mineur.";
}else{
    $response = "Je suis majeur.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $response ?>
</body>
</html>