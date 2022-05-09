<?php 

include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/CreditCard.php";
include_once __DIR__ . "/classes/Product.php";

$cuccia = new Product("cuccia", "https://www.miglioridea.it/wp-content/uploads/2017/06/cucce-per-cani-esterno-baita.jpg","cu1234", "cuccia per cani di media dimensioni", "$30.12", 4.8, "ottimo rapporto qualità prezzo", new Size(82, 72, 85), "brown", true );

var_dump($cuccia);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    
</body>
</html>