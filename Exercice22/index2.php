<?php
// Récupération actuel de visite
$number = file_get_contents('compteur.txt');
// Sauvegarde du nouveau nombre dans le fichier compteur.txt + augmentation de visiste de 1
file_put_contents('compteur.txt', ++$number);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo '<p> Cette page a été vu ' .$number. ' fois.</p><hr>';


?>
</body>
</html>