<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $color = $_POST["color"];
    $info = $_POST["info"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <style>
        .color{
            width: 1em;
            height: 1em;
            background-color: <?php echo $color; ?>
        }
    </style>
</head>
<body>
    <p>Tu nombre es <?php echo ucfirst($name)?></p>
    <p>Tienes <?php if($age == 1){echo "$age año";}else{echo "$age años";} ?></p>
    <p>Tu género es <?php echo $gender?></p>
    <p>Color <div class="color"></div></p>
    <p><?php if($info == "si"){echo "Si quieres recibir info";}else{echo "No quieres recibir info.";}?></p>
</body>
</html>