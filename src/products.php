<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$products = [
    [
        "id" => 1,
        "name" => "Monitor",
        "category" => "Hardware",
        "price" => 189
    ],
    [
        "id" => 2,
        "name" => "Teclat",
        "category" => "Perifèrics",
        "price" => 49
    ],
    [
        "id" => 3,
        "name" => "Ratolí",
        "category" => "Perifèrics",
        "price" => 29
    ]
];

function priceLabel($price) {

    if ($price < 50) {
        return "Producte econòmic";
    }
    elseif ($price <= 150) {
        return "Preu mitjà";
    }
    else {
        return "Producte premium";
    }
    if (isset($_GET["category"])) {
    $category = $_GET["category"];
    }
}


?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Catàleg PHP</title>
</head>

<body>

    <h1>Catàleg de productes</h1>
    <nav>

    <a href="products.php">
        Tots els productes
    </a>

    <a href="products.php?category=Hardware">
        Hardware
    </a>

    <a href="products.php?category=Perif%C3%A8rics">
        Perifèrics
    </a>

</nav>

<hr>
    <?php foreach ($products as $product): ?>
        <article>

            <h2><?= htmlspecialchars($product["name"]) ?></h2>

            <p>
                Categoria:
                <?= htmlspecialchars($product["category"]) ?>
            </p>

            <p>
                Preu:
                <?= $product["price"] ?> €
            </p>

            <p>
                <?= priceLabel($product["price"]) ?>
            </p>

        </article>

        <hr>
    <?php endforeach; ?>
</body>
</html>