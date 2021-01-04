<?php 

if(isset($_GET['search'])) {


    if(mb_strlen($_GET['search']) < 1 || mb_strlen($_GET['search']) > 50){
        $error = 'Recherche Invalide';
    }



if(!isset($error)){
            // Connexion à la bdd
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
        $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e){
            //Si la connection à échoué , le die() stop la page et affiche un message
            die('Problème avec bdd :' . $e->getMessage());
        }
        $searchfruits = $bdd->prepare("SELECT * FROM fruits WHERE name LIKE ?");

        $searchfruits->execute([
            '%' . $_GET['search'] . '%'
        ]);
        $fruits = $searchfruits->fetchAll(PDO::FETCH_ASSOC);

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
<body> <?php 
if(isset($error)) {
    echo '<p style="color:red;">' . $error . '</p>';
}
?>
    <form action="index.php" method="GET">

        <input type="text" name="search">
        <input type="submit">

    </form>


    <?php

    if(!empty($fruits)){
        ?> 
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Couleur</th>
                    <th>Origine</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($fruits as $fruit){
                        echo 'tr';
                        echo '<td>' .$fruit['name']. '</td>';
                    }
            </tbody>
        </table>
    }

?>
</body>
</html>