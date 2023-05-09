<?php
$age = -5;
$response = null;

switch ($age) {
    case ($age < 0):
    case (!is_int($age)):
        $response = "Y a un problème";
        break;
    case ($age < 18):
        $response = "Je suis mineur.";
        break;
    case ($age >= 18):
    default:
        $response = "Je suis majeur.";
        break;
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