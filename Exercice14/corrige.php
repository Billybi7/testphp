<?php

// Par défaut on assigne la couleur grey  à cette variable pour éviter d'avoir une variable vide dans le cas où il n'y a pas de formulaire ou 2cooki
$newColor = "grey";


if(isset($_COOKIE['backgroundColor'])) {
        //Si le cookie de sauvegarde de la couleur existe, $newcolor prendra la couleur stockée
    $newColor = $_COOKIE['backgroundColor'];
}
// Appel des variables
if(isset($_POST['color'])){



    // Bloc des verifs
    if(mb_strlen($_POST['color']) <2 || mb_strlen($_POST['color']) > 10){
        $error ='Vous devez remplir le champ de couleur !';
    }

    // Si pas d'erreur 
    if(!isset($error)){

        // $newColor opptiendra la couleur envoyée dans le formulaire 
        $newColor = $_POST['color'];

        // On créer un nouveau cookie avec la nouvelle couleur
        setcookie('backgroundColor', $_POST['color'], time() + 24 * 3600, null, null, false, true);
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= "background-color : <?php echo htmlspecialchars($newColor); ?> ;" >
    
    <form action="corrige.php" method="POST">
    <input type="color" name ="color">
    <input type="submit">
    </form>
    <?php 

    // Si le message d'erreur existe, on l'affiche 
    if(isset($error)){
        echo "<p style='color:red;'>" . $error . "</p>";
    }
    ?>
</body>
</html>