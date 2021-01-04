<?php 
$pseudoverif = "([a-zA-Z0-9-\'éèàê]{2,25})$";

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['birthdate'])){

 
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
       
        $errors[] = "Entrer une adresse valide !";
    } 

    if(!preg_match('/^[a-zA-Z0-9\'éèàù\-]{2,25}$/', $_POST['name'])) {
        
        $errors[] = "Le pseudonyme doit contenir entre 8 et 25 caractère !";

    } 

    if(!preg_match('/^.{8,4096}$/', $_POST['password'])) {
        
        $errors[] = "Mot de passe doit contenir minimum 8 caractères !";

    } 

    if(!preg_match('/^.{8,4096}$/', $_POST['birthdate'])) {
        
        $errors[] = "Mot de passe doit contenir minimum 8 caractères !";

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
<?php     if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }


    if(isset($welcome)){

        echo '<p style="color:green;">' . $welcome . '</p>';

    } else {
        ?>
    <form action="index.php" method="POST">

        <input type="email" name="email" placeholder="Email">
        <input type="name" name="name" placeholder="Pseudo">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="text" name="birthdate" placeholder="Date de naissance">
        <input type="submit">

    </form>
    <?php
    ?>
</body>
</html> 