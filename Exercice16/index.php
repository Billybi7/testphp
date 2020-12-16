<?php
if(
    isset($_POST['email']) && isset($_POST['age']) && isset($_POST['link'])){


    // 2ème étape : bloc des vérifs (1 champ = 1 structure conditionnelle) : consiste pour chaque champ à vérifier qu'il contient bien des données valides
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //$succes[] = "Yes email";
    } else {
    $errors[] = "Entrer une adresse valide !";
    }
    if(filter_var($_POST["age"],FILTER_VALIDATE_INT) && $_POST['age'] < 151 && $_POST['age'] > 0) {
       // $succes[] = "Yes age";
    } else {
        $errors[] = "Entrer un age réel !";
    }
    if(filter_var($_POST['link'], FILTER_VALIDATE_URL)) {
        //$succes[] = "Yes url";
    } else {
        $errors[] = "url de ton site pas valide !";
    }
    if(!isset($errors)){

 
        $welcome = "Vos données ont bien été récoltées, merci pour ça !";
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
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }


    if(isset($welcome)){

        echo '<p style="color:green;">' . $welcome . '</p>';

    } else {

        ?>
    <form action="index.php" method="POST">
                <input type="email" placeholder="email" name="email">
                <input type="text" placeholder="Age" name="age">
                <input type="link" name="link">
                <input type="submit">
    </form>
    <?php
    }
?>


</body>
</html>