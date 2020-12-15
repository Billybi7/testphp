<?php
setcookie('color', $_POST['color'], time() + 60*360, null, null, false, null);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        
        <style> 
        body {
            background-color :
            <?php 
        
           if(isset($_POST['color'])) {
                echo htmlspecialchars($_POST['color']);
                } else {
                    echo 'white';
                }
        ?>;
        }
</style>
</head>
<body>
    
<?php 
     if(isset($_POST['color'])) {
        if(mb_strlen($_POST['color']) < 2 || mb_strlen($_POST['color']) > 10){
            echo 'Erreur';
        }
     }    
?>

    <form action="index.php" method="POST">
    <input type="text" name="color" id="color" placeholder="Color in english">
    <input type="submit">
    </form>
</body>
</html> 