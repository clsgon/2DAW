<?php
    require './php/class_product.php';
    require './bbdd/methods.php';
    require './bbdd/config.php';

    $products = AllProducts($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Compra</title>
</head>
<body>
    <header>
        <a href="./pages/admin.php">Ir al administrador</a>
    </header>
    <main>
        <form action="./pages/product.php" method="$_GET">
        <?php
            echo "<ul>";
            for ($i = 0; $i < count($products); $i += 1)
                echo "<li><button type='submit' value='".$products[$i]->name."' name='product'>".$products[$i]->name."</button></li>";
            echo "<ul>";
        ?>
        </form>
    </main>
    <footer>
        <a href="./pages/productosJson.php">Ir al json</a>
    </footer>
</body>
</html>
<?php $conn = null ?>