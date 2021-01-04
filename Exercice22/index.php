<?php
    // Connexion au fichier
$myFile = fopen('compteur.txt', 'r+');


    // Récupération du nombre actuel de viste
$number = fread($myFile, 8);

    // Augmentation du nombre de visite de 1
$number++;

    // Replacement du curseur PHP au début du fichier (pour écrire par dessus l'ancien numner)
fseek($myFile,0);

    // Écriture du nouveau nombre dans le fichier ) la place de l'ancien
fwrite($myFile, $number);

    // Fermeture de la connexion
fclose($myFile); 
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
