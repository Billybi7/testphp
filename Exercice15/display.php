<?php
session_start();


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
include 'menu.php';

?>
    <h1>PROFIL</h1>

    <?php

    // Si l'array user exite en session existe (ce qui revient à dire que l'utilisateur est connecté), on affiche une phrase de bienvenue à l'utilisateur, sinon un message invitant à se connecter
    if((isset($_SESSION['user']))) {
    echo 'Bonjour ' .htmlspecialchars($_SESSION['user']['name']). ' ' .htmlspecialchars($_SESSION['user']['lastname']). " !"; 
} else {
    echo "Je vous invite à aller sur la page <a href='create.php'> create</a>";
}

?>
</body>
</html>