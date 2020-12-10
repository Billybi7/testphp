<?php
$name = ['billy','bobi','bibi','bobo', 'baba', 'jojo', 'jodie', 'jiji', 'lili', 'lola', 'jo'];
$i =0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <ul>
    <?php

    while($i < 11){

       echo '<li> longueur ' .$name[$i]++ . ' index </li> <br>';
       $i++;
    }


    ?>

    </ul>
</body>
</html>