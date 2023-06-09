<?php
$name = $product["name"];
$description = $product["description"];
$price = $product["price"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Product</title>
</head>
<body>
    <header class="flex-space-between bottom-border">
        <a href="index.php"><img src="img/brand.svg" alt="logo de la compagnie"></a>
        <div class="flex-space-between">
            <a href="cart.php"><img class="button grey-button shopping-cart" src="img/cart.svg" alt="panier"></a>
            <?php if(is_null_or_blank($user)) {?>
                <a href="sign-in.php" class="button blue-button connect">Connexion</a>
            <?php } else { ?>
                <a href="sign-out.php" class="button grey-button disconnect">Se déconnecter</a>
            <?php } ?>
        </div>
    </header>
    <main class="product-main global-margin">
        <div class="products">
            <div>
                <img class="product-image" src="img/<?= $sku ?>.png" alt="<?= $name ?>">
            </div>
            <div>
                <div class="product-name">
                    <strong>
                        <?= $name ?>
                    </strong>
                </div>
                <div class="product-description">
                    <?= $description ?>
                </div>
                <div class="price">
                    <strong><?= $price?>$</strong>
                </div>
                <form action="index.php" method="get">
                   <input class="invisible" type="text" name="sku" id="sku" value="<?= $sku ?>">
                   <input type="number" class="restrained-width default-input" name="qte" id="qte" value="1" min="1">
                   <input type="submit" class="button grey-button" value="Ajouter au panier">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div>Copyright 2023 Arthur Tirado et Hugo Larochelle</div>
    </footer>
</body>
</html>