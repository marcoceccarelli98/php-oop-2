<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Type.php";

$testProduct = new Product("Crocchette", 10.5, "img1.jpg");
$testCategory = new Category("Crocchette", 10.5, "img1.jpg");
$testType = new Type("Crocchette", 10.5, "img1.jpg");


echo '<pre>';
var_dump($testProduct);
echo '</pre>';

echo '<pre>';
var_dump($testCategory);
echo '</pre>';

echo '<pre>';
var_dump($testType);
echo '</pre>';

// try {
//     $movie1->setYear(2020);
// } catch (Exception $error) {
//     echo $error->getMessage();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>
</head>

<body>
    <div class="container">

    </div>
</body>

</html>