<?php

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors = "Email invalide !";
    }

    if(!preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[ !"#\$%&\'()*+,\-.\/:;<=>?@[\\\\\]\^_`{\|}~]).{8,4096}$/', $_POST['password'])){
        $errors = "Email invalide !";
    }
    if($_POST['password'] != $_POST['confirmPassword']){
        $errors = "Email invalide !";
    }

    // Si pas d'erreurs
    if(!isset($errors)){

        // Second bloc de vérif  (si l'email n'est pas déjà prit)

        //Connexion à la bdd
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
            $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e){
            //Si la connection à échoué , le die() stop la page et affiche un message
            die('Problème avec bdd :' . $e->getMessage());
        }

        $checkIfExists = $bdd->prepare('SELECT * FROM accounts WHERE email = ?');

        $checkIfExists->execute([
            $_POST['email']
        ]);

        $account = $checkIfExists->fetch(PDO::FETCH_ASSOC);

        if(!empty($account)){
            $errors[] = "Cette adresse email est déjà prise, veuillez en mettre une autre !";
        }
        
        if(!isset($errors)){

            // Requête préparée pour créer le nouveau compte (requ^ete préparée pour protéger des injections SQL car il y a des variable dedans)
            $addUser = $bdd->prepare('INSERT INTO accounts(email, password, register_date) VALUES(?, ?, ?,)');

            // Execution de la requête 

            $statut = $addUser->execute([$_POST['email'],     // Email envoyé dans le formulaire donc $_POST['email']
            password_hash($_POST['password'], PASSWORD_BCRYPT),     //  On stock le hash du mot de passe
            date('Y-m-d H:i:s') // On stock la date actuelle au moment de l'execution
            ]);

        }
        if($statut){
            $succes =' novtre compte a bien été créé !';
        }


        // Fermeture de la requête
        $addUser->closeCursor();

        // Si ça a bien fonctionné ($statut contiendra true si c'est le cas, sinon false)
        if($statut){
            $succes = 'Votre compte a bien été créé';
        } else {
            $errors = 'Problème avec le site, veuillez ré-essayer plus tard !';
        }
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

    //afichage des erreurs si il y en a 
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error. '</p>';
        }
    }
    if(isset($succes)){
        echo '<p style="color:green;">' . $succes . '</p>';
    } else {
?>          <form action="register.php" method="POST">
            <input type="text" placeholder="email" name="email">
            <input type="text" name="password" placeholder="motde passe">
            <input type="text" name="confirmPassword" placeholder="confirmation password">
            <input type="submit">
            </form> 
            <?php

    }

?>

</body>
</html>