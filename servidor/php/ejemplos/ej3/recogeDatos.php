<?php
    $ar = array(1 => "Has elegido la primera frase.", 2 => "Has elegido la segunda frase.", 3 => "Has elegido la tercera frase.");
    $sen = $ar[$_REQUEST["frase"]];
    $color = $_REQUEST["color"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        echo "<style>";
        echo "body{background-color: $color;}";
        if($color == "#000000"){ echo "body{color: white;}";}
        echo "</style>";
    ?>
</head>
<body>
    <?php
        echo "Prueba: $sen";
    ?>
</body>
</html>