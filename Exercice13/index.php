<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="formulaire" action="index.php" method="POST">
    <input type="text" name="name" id="name" placeholder ="Prénom">
    <input type="text" name="lastname" id="lastname" placeholder ="Nom">
    <input type="text" name="age" id="age" placeholder ="age">
    <input type=submit>
</form>

<?php 


if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['age'])) {
    
    $name = $_POST["name"];
    $longueurname = mb_strlen($name);
    $lastname = $_POST["lastname"];
    $longueurlastname = mb_strlen($lastname);
    $age = $_POST["age"];


 /*var_dump($name);
 var_dump($longueurname);
 var_dump($lastname);
 var_dump($longueurlastname);
*/
    if($longueurname > 1 && $longueurname < 51 && $longueurlastname > 1 && $longueurlastname < 51 && $age > 0 && $age <151) {
       /* var_dump($name);
        var_dump($longueurname);
        var_dump($lastname);
        var_dump($longueurlastname); */

        echo 'Bravo ' .htmlspecialchars($_POST['name']). " " .htmlspecialchars($_POST['lastname']). "! Tu as " .htmlspecialchars($_POST['age']). " ans." ;

    } else{
        /*var_dump($name);
        var_dump($longueurname);
        var_dump($lastname);
        var_dump($longueurlastname); */
        echo "<hr>";
        if($longueurname < 1 || $longueurname > 50) {
            echo "prénom doit comporter entre 2 et 50 caractères <br><hr>";
        }
        if( $longueurlastname < 1 || $longueurlastname > 50){
            echo "nom doit comporter entre 2 et 50 caractères <br><hr>";
        }
        var_dump ($age);
        if ($age < 0 || $age >150 || empty($age)){
            echo " age doit être un nombre entier compris entre 0 et 150 inclus";
               
           
        }
    }

}


 ?>




</body>
</html>

<!-- sddddddddddddddddddddddddddddddddddf-->
<?php

// 1ère étape : Appel des variables (1 champ de formulaire = 1 isset) : consiste à vérifier si TOUTES les variables du formulaire existe
if(
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['age'])
){


    // 2ème étape : bloc des vérifs (1 champ = 1 structure conditionnelle) : consiste pour chaque champ à vérifier qu'il contient bien des données valides

    if(mb_strlen($_POST['firstname']) < 2 || mb_strlen($_POST['firstname']) > 50){
        $errors[] = 'Prénom pas bon !';
    }

    if(mb_strlen($_POST['lastname']) < 2 || mb_strlen($_POST['lastname']) > 50){
        $errors[] = 'Nom pas bon !';
    }

    if(!is_numeric($_POST['age']) || $_POST['age'] < 0 || $_POST['age'] > 150 || !ctype_digit($_POST['age'])){

        $errors[] = 'Age pas bon !';
    }


    // 3ème étape : si le formulaire n'a pas d'erreur, on fait les actions post-formulaire
    if(!isset($errors)){

        // Création du message de succès en mettant la version protégée des données (sinon faille XSS)
        $successMsg = 'Bonjour ' . htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']) . ' , tu as ' . htmlspecialchars($_POST['age']) . ' ans !';
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13</title>
</head>
<body>


    <?php

    // Si l'array $errors existe, alors on le parcours avec un foreach et on affiche les erreurs qu'il contient
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }

    // Si la variable $successMsg existe, alors on l'affiche, sinon on affiche le formulaire dans le else
    if(isset($successMsg)){

        echo '<p style="color:green;">' . $successMsg . '</p>';

    } else {

        ?>
            <form action="index.php" method="POST">
                <input type="text" placeholder="Prénom" name="firstname">
                <input type="text" placeholder="Nom" name="lastname">
                <input type="text" placeholder="Age" name="age">
                <input type="submit">
            </form>
        <?php

    }

    ?>

</body>
</html>