<?php

    $users = [

        [
            'name' => 'billy',
            'age' => '24',
            'country' => 'france',
            'city' => 'mulhouse',
        ],
        [
            'name' => 'bobi',
            'age' => '20',
            'country' => 'france',
            'city' => 'strasbourg',
        ],
        [
            'name' => 'bibi',
            'age' => '16',
            'country' => 'france',
            'city' => 'rixheim',
        ],
        [
            'name' => 'bilibi',
            'age' => '13',
            'country' => 'france',
            'city' => 'kingersheim',
        ],
        [
            'name' => 'bilou',
            'age' => '4',
            'country' => 'france',
            'city' => 'lutterbach',
        ],
    ];            

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <?php
    foreach( $users as $user){
       
        echo '<h2> ' .$user['name']. '</h2> <p> Âgé de ' .$user['age']. ' vivant en ' .$user['country']. ' à ' .$user['city']. '. </p>';
        
    }



    ?>
</body>
</html>