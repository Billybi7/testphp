<?php
$userInfos = [
    'pseudo' => 'Billy',
    'age' => '24',
    'city' => 'Mulhouse',
    'rank' => '10',
    'level' => '30'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo07</title>
    <style> 
    .style{
        color :red;
        font-weight: bold;

    </style>
</head>
<body>
    <h1>array</h1>
    <?php




echo 'Le pseudo est <p class=style>' .$userInfos['pseudo'] . 
' </p> son age est de <p class=style> ' . $userInfos['age'] . 
' </p> ans. Il vient de <p class=style>' .$userInfos['city']  . 
'</p>. Son rank est <p class=style>' . $userInfos['rank'] . 
' </p> et son niveau est de <p. class=style> ' .$userInfos['level'] . '</p>. ';


?>
</body>
</html>