
<?php

$i =0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle while</h1>

<ul>
<?php



while($i < 1){
    $i++;
    while($i <= 5000) {
        echo '<li>'.$i.'</li>';
        $i++;
    }
}
?>
</ul>
</body>
</html>