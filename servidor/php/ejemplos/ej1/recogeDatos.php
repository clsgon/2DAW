<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ar = array(1 => "Has elegido la primera frase.", 2 => "Has elegido la segunda frase.", 3 => "Has elegido la tercera frase.");
        $sen = $ar[$_REQUEST["number"]];
        echo "Prueba: $sen";
    ?>
</body>
</html>