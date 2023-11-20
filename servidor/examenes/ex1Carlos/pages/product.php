<?php
    require '../php/class_product.php';
    require '../bbdd/methods.php';
    require '../bbdd/config.php';

    if (isset($_GET["product"]))
        $product = $_GET["product"];
    $products = AllProducts($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (min-width: 1028px)" href="../style/product_computer.css">
    <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 1027px)" href="../style/product_computer.css">
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="../style/product_phone.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            if(isset($product))
            {
                for($i = 0; $i < count($products); $i += 1){
                    if($product == $products[$i]->name){
                        echo "<div class='product'>";
                        $path_img = $products[$i]->path_img;
                        echo "<h3>$product</h3>";
                        echo "<hr>";
                        echo "<p><b>Precio:</b> ".$products[$i]->price."</p>";
                        echo "<img src=$path_img alt=product-image>";
                        echo "</div>";
                    }
                }
            }
        ?>
    </main>
</body>
</html>