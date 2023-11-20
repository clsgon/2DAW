<?php
    require '../bbdd/config.php';
    require '../bbdd/methods.php';
    require '../php/class_product.php';
    if(!isset($_POST["name"]))
    {
        if(!isset($_POST["username"]))
            header("Location: ./error.php");
        else
        {
            if(!password_verify($_POST["pass"],getAdmin($conn)[1]))
            {
                header("Location: ./error.php?error=loginIncorrect");
            }
        }
    }
    if(isset($_POST["name"]))
    {
        echo insertProduct($conn, new Product($_POST["name"], $_POST["price"], $_POST["path"]));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form.css">
    <title>Document</title>
</head>
<body>
<form action="./add_product.php" method="post">
    <div class="campo">
        <label for="name">Nombre del producto: </label>
        <input type="text" name="name" id="name">
    </div>
    <div class="campo">
        <label for="price">Precio: </label>
        <input type="number" name="price" id="price">
    </div>
    <div class="campo">
        <label for="path">Path: </label>
        <input type="text" name="path" id="path">
    </div>
    <input type="submit" value="Registrar producto">
</form>
<a href="../index.php">Ver productos</a>
</body>
</html>

<?php $conn = null ?>