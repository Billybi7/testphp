
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle for</h1>

<ul>
<?php


for($i = 0; $i < 5000; $i++) {
    
    echo '<li>'.++$i.'</li>';
}
?>
</ul>
</body>
</html>