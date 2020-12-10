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


echo 'Le pseudo est <span class=style>' .$userInfos['pseudo'] . 
' </span> son age est de <span class=style> ' . $userInfos['age'] . 
' </span> ans. Il vient de <span class=style>' .$userInfos['city']  . 
'</span>. Son rank est <span class=style>' . $userInfos['rank'] . 
' </span> et son niveau est de <span. class=style> ' .$userInfos['level'] . '</span>. ';


?>
</body>
</html>