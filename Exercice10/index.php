<?php

// Exercice 10-a : Afficher la date avec la fonction date sous le format suivant : "friday 11 december 2020, 14h 55m 30s"

echo date('l j F Y, H\h i\m s\s ');
?><br> <hr>
<?php
// Exercice 10-b : Chercher à afficher la date avec strftime en français en vous aidant de google et php.net

setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
echo strftime("%A %d %B %Y, %Hh %Mm %Ss <hr>");

echo utf8_encode(strftime("%A %d %B %Y, %Hh %Mm %Ss <hr>"));

$currentDate = date('d-m-Y H:i:s');
?>

<?php
echo $currentDate. '<hr>';


// Exercice 10-c :Avec la fonction date(), afficher à l'écran la date qu'il sera dans 26 jours et 16h 2020-12-11 06:42:30


echo date("Y-m-d, H:i:s ", time()+(26*24*3600)+(16*3600));
echo '<br><hr>';


// Exercice 10-d : Créer une variable contenant cette date précise textuelle : "2004-04-16 12:00:00". Le but est d'ajouter 435 jours à cette date puis de l'afficher sous le format suivant : "samedi 25 juin 2005, 06h 00m 00s"

$dateToTransform ="2004-04-16 12:00:00";
echo '  Exo d<br><hr>';
setlocale(LC_TIME, "fr_FR");
echo strftime("%A %d %B %Y, %Hh %Mm %Ss <hr>", strtotime($dateToTransform. ' + 435 days'));
