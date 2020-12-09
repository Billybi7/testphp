<?php


$admin = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {
        font-weight:bold;
        color:red;

    }
    </style>
</head>
<body>
    <h1> Exercice 3</h1>


    <?php
    if($admin){
        ?>
        <p> Bienvenue dans votre domaine monsieur</p> <br> <a href=#>Lien externe</a>
        <?php
    } else {
        ?> <p class="error"> Page réservée aux admins </p> 
        <?php
    }
    ?>
</body>
</html>