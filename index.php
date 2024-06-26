<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Type.php";
require_once __DIR__ . "/Models/Product.php";

// --- PRODUCTS

// - DOG
$dogFood = new Product("dog", "food", "Dog Food", 10.50, "./images/dog_food.jpg");
$dogRope = new Product("dog", "games", "Dog Rope", 6.40, "./images/dog_rope.jpg");
$dogToothBrush = new Product("dog", "care", "Dog Tooth Brush", 7.30, "./images/dog_tooth_brush.jpg");
$dogKennel = new Product("dog", "kennel", "Dog Kennel", 62.70, "./images/dog_kennel.jpg");

// - CAT
$catFood = new Product("cat", "food", "Cat Food", 8.99, "./images/cat_food.jpg");
$catFakeMouse = new Product("cat", "games", "Cat Fake Mouse", 4.99, "./images/cat_fake_mouse.jpg");
$catFleaShampoo = new Product("cat", "care", "Cat Flea Shampoo", 12.80, "./images/cat_flea_shampoo.jpg");
$catKennel = new Product("cat", "kennel", "Cat Kennel", 42.60, "./images/cat_kennel.jpg");

$products = [$dogFood, $dogRope, $dogToothBrush, $dogKennel, $catFood, $catFakeMouse, $catFleaShampoo, $catKennel];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/main.css">
    <title>OOP Shop</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <i class="fas fa-paw"></i> OOP SHOP
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="products-list">
                <?php foreach ($products as $product) : ?>
                    <div class="product-card">
                        <div class="image-content">
                            <img src="<?php echo $product->getImage() ?>" alt="">
                        </div>
                        <div class="text-content">
                            <h2><?php echo $product->getProductName() ?></h2>
                            <div class="text-bottom">
                                <i class="<?php echo $product->getIcon() ?>"></i>
                                <div><?php echo number_format($product->getPrice(), 2); ?> €</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>