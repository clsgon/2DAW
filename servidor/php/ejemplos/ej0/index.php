<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: bisque;
        }
        h1
        {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Frase Aleatoria</h1>
    <?php
        $arr = array(0 => "Primera frase", 1 => "Segunda Frase", 2 => "Tercera Frase", 3 => "Tercera Frase");
        $rnd = rand(0, 3);

        echo "<p>$arr[$rnd]</p>"
    ?>
</body>
</html>