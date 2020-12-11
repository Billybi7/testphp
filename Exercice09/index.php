<?php

$fruits = ['banane', 'pomme', 'fraise', 'kiwi'];
$price = 40;
$tva = 0.20;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice09</title>
</head>
<body>

<?php

function print_rv2($elementToDisplay){
    echo '<pre>';
    print_r($elementToDisplay);
    echo '</pre>';

}
print_rv2($fruits);


//trigger_error('Message d\'erreur !' E_USER_NOTICE);

 function getTTCprice($htPrice, $tax =20){

    $taxToAdd = $htPrice * $tax /100;

    $finalPrice = $htPrice + $taxToAdd;
    
    return $finalPrice;

   // return  $htPrice * (($tax /100) +1) ;
    
 }
echo getTTCprice(100);
?>
</body>
</html>