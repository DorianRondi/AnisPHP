<?php
$chaine = "Ceci est une chaîne de caractère.";
$tab = explode(".",$chaine);
$tab = explode(" ",$tab[0]);

foreach ($tab as $value) {
    echo $value."<br>";
}