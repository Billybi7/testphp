<?php

if(isset($_POST['name']) && isset($_POST['color']) && isset($_POST['origin']) && isset($_POST['price'])){

    if(mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 25){
        $errors[] = 'Le nom est invalide ! (2 à 25 caractères)';
    }

    if(mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 25){
        $errors[] = 'La couleur est invalide ! (2 à 25 caractères)';
    }

    if(mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 25){
        $errors[] = 'Le pays d\'origine est invalide ! (2 à 55 caractères)';
    }

    if(!preg_match('/^[0-9]{1,4}([\.,]?[0-9]{1,2})?$/', $_POST['price'])) {
        
        $errors[] = "Le prix doit contenir maximum 4 chiffres avant la virgule et maximum 2 après la virgule !";
    } 
    echo '<pre>';
    print_r($errors);
    echo '</pre>';
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
<form action="index.php" method="POST">
                <input type="text" placeholder="name" name="name">
                <input type="text" placeholder="color" name="color">
                <input type="text" placeholder="origin" name="origin">
                <input type="text" placeholder="price" name="price">
                <input type="submit">
    </form> 
</body>
</html>