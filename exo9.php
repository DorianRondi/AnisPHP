<?php
$chaine = "Ceci est une chaîne de caractère.";
$cut1 = ["Ceci ", " de caractère."];
$chaine = str_replace($cut1,"",$chaine);

echo $chaine;