<?php

// Exercice 10-a : Afficher la date avec la fonction date sous le format suivant : "friday 11 december 2020, 14h 55m 30s"

echo date('l j F Y, H\h i\m s\s ');
?><br> <hr>
<?php
// Exercice 10-b : Chercher à afficher la date avec strftime en français en vous aidant de google et php.net

setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
echo strftime("%A %d %B %Y, %Hh %Mm %Ss <hr>");

echo utf8_encode(strftime("%A %d %B %Y, %Hh %Mm %Ss"));