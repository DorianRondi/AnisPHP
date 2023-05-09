<?php

$film = [
    "Last Action Hero",
    "Terminator",
    "Total Recall",
    "Commando",
    "Double Detente",
    "Predator",
    "À l'aube du sixième jour",
    "Conan le barbard"

];
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
    <main>
        <?php foreach ($film as $film) : ?>
            <p><?= $film ?></p>
        <?php endforeach; ?>
    </main>
    
</body>
</html>