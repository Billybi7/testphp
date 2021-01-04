<?php
// Obligatoire pour avoir accès aux sessions 
session_start();


    // Si l'array "user" existe en session, on crée un message d'erreur, sinon on le créer avec ses données et un message de succès
    if(!isset($_SESSION['lastname']) && !isset($_SESSION['name'])){

        // L'array user contiendra toutes les données de l'utilisateur connecté
        $_SESSION['user'] = [
            'name' => 'Alice',
            'lastname' => 'Durand',
        ];

        $succes = 'Les variables ont bien été créées';
    } else {
        $error = 'Les variables existent déjà !';
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
include 'menu.php';

?>
    <h1>CREATE</h1>

    <?php
    if(isset($succes)) {
        echo $succes;   
    }
    if(isset($error)) {
        echo $error;   
    }

    ?>
</body>
</html>