<?php

    $users = [

        [
            'name' => 'billy',
            'age' => '24',
            'country' => 'france',
            'city' => 'mulhouse',
            'countrys' => [
                'algérie', 'angleterre'
            ],
        ],
        [
            'name' => 'bobi',
            'age' => '20',
            'country' => 'france',
            'city' => 'strasbourg',
            'countrys' => [
                'allemagne', 'maroc'
            ],
        ],
        [
            'name' => 'bibi',
            'age' => '16',
            'country' => 'france',
            'city' => 'rixheim',
            'countrys' => [
                'espagne', 'italie'
            ],
        ],
        [
            'name' => 'bilibi',
            'age' => '13',
            'country' => 'france',
            'city' => 'kingersheim',
            'countrys' => [
                'suisse', 'canada'
            ],
        ],
        [
            'name' => 'bilou',
            'age' => '4',
            'country' => 'france',
            'city' => 'lutterbach',
            'countrys' => [''],
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
       
        echo '<h2> ' .$user['name']. '</h2> <p> Âgé de ' .$user['age']. ' vivant en ' .$user['country']. ' à ' .$user['city']. '. </p>';{
            if(count($user["countrys"]) > 1) {

                ?>
                <ul>
                <?php
                echo '<br> Voici les pays visités ' .$user['countrys'][0]. ' et ' .$user['countrys'][1]. ".";
                ?>
                </ul>
                <?php
            } else {
                echo $user['name']." n'a pas encore visité de pays.";
            }
        
    }
}

    ?>
</body>
</html>