<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$admin = true;

    if($admin == TRUE){
        echo '<p> Bienvenue dans votre domaine monsieur</p> <br> <a href=#>Lien externe</a>';
    } else {
        echo '<p style= background-color:red;> Page réservée aux <p style= font-size: bold; admins</p> </p>';
    }
    ?>
</body>
</html>