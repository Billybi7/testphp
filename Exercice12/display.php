
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if (isset($_GET['name']) && isset($_GET['email'])) {
    echo 'bienvenu ' .htmlspecialchars($_GET['name']). " Ton mail : " .htmlspecialchars($_GET['email']). "." ;
 }else {
     echo "faites le formulaire";
 }
?>
</body>
</html>
