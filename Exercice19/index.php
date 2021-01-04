<?php

// Appel des variables
if(isset($_POST['name']) && isset($_POST['color']) && isset($_POST['origin']) && isset($_POST['price'])){

            //Bloc des vérifs
    if(mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 25){
        $errors[] = 'Le nom est invalide ! (2 à 25 caractères)';
    }

    if(mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 25){
        $errors[] = 'La couleur est invalide ! (2 à 25 caractères)';
    }

    if(mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 25){
        $errors[] = 'Le pays d\'origine est invalide ! (2 à 55 caractères)';
    }

        //Le prix doit être composé de 1 à 4 chiffres, suivi optionnellement d'une virgule ou un point puis de 1 ou 2 chiffres derrière la virgule
    if(!preg_match('/^[0-9]{1,4}([\.,]?[0-9]{1,2})?$/', $_POST['price'])) {
        
        $errors[] = "Le prix doit contenir maximum 4 chiffres avant la virgule et maximum 2 après la virgule !";
    } 


    if(!isset($errors)){

        // Connexion à la bdd
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
            $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e){
            //Si la connection à échoué , le die() stop la page et affiche un message
            die('Problème avec bdd :' . $e->getMessage());
        }

        // Requête préparée pour créer le nouveau fruit (requête préparée car il y a des variables PHP à mettre dedans, donc on se protège des injections SQL)
        $response = $bdd->prepare('INSERT INTO fruits(name, color, origin, price") VALUES(?, ?, ?, ?)');

        //Execution de la requête en liant les 4 marqueurs à leurs variables PHP
        $response->execute([$_POST['name'], $_POST['color'], $_POST['origin'], 
        str_replace(',',',', $_POST['price']),  // Stockage en bdd du prix avec un point au lieu d'une virgule s'il y en a une 
        ]);

        // Si rowCount renvoi plus de 0, alors l'insertion a fonctionné, sinon erreur
        if($response->rowCount() > 0) {
            $succes = " Le fruit a bien été créé !";
        } else {
            $errors[] = 'Problème interne au site veuillez ré-essayer plus tard';
        }

        // Fermeture de la requête
        $response->closeCursor();

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
<body>
<?php     

        //Affichage des erreurs
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }

    // Affichage du message de succès si il esxiste, sinon formulaire
    if(isset($succes)){

        echo '<p style="color:green;">' . $succes . '</p>';

    } else {
        ?>
<form action="index.php" method="POST">
                <input type="text" placeholder="name" name="name">
                <input type="text" placeholder="color" name="color">
                <input type="text" placeholder="origin" name="origin">
                <input type="text" placeholder="price" name="price">
                <input type="submit">
    </form> 
    <?php
    }
    ?>
</body>
</html>