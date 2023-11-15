<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Supermercado</title>
</head>
<body>
    <form action="./index.php" method="get">
        <input type="text" name="product" id="product">
        <input type="submit" value="Buscar">
    </form>

    <div class="products">
        <div class="carrefour">
            <?php include "./php/carrefour.php"; ?>
        </div>

        <div class="dia">
            <?php include "./php/dia.php"; ?>
        </div>
    </div>
</body>
</html>