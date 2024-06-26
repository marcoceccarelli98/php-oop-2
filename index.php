<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Type.php";
require_once __DIR__ . "/Models/Product.php";

// --- PRODUCTS

// - DOG
$dogFood = new Product("dog", "food", "Dog Food", 10.50, "dog_food.jpg");
$dogRope = new Product("dog", "games", "Dog Rope", 6.40, "dog_rope.jpg");

// - CAT
$catFood = new Product("cat", "food", "Cat Food", 8.99, "cat_food.jpg");
$catFakeMouse = new Product("cat", "games", "Cat Fake Mouse", 4.99, "cat_fake_mouse.jpg");

echo '<pre>';
var_dump($testProduct);
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