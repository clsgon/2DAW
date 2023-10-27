<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa</title>
    <style>
        form input{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form action="./index.php" method="post">
        <select name="clothes" id="clothes">
            <option value="undefined">Elegir</option>
            <option value="camiseta">Camisetas</option>
            <option value="pantalon">Pantalones</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <div>
        <?php
            $path = "./csv/ropa.csv";
            if (isset($_POST["clothes"]) || isset($_COOKIE["interes"]))
            {
                if(isset($_POST["clothes"]) && $_POST["clothes"] == "undefined")
                    echo "<script type='text/javascript'>alert('Por favor eliga una opción');</script>";

                $fd = fopen($path, "r");
                echo "<ul>";
                while ($linea = fgets($fd)){
                    $tipo = explode(",", $linea)[0];
                    $size = explode(",", $linea)[1];
                    $color = ucfirst(explode(",", $linea)[2]);
                    if (isset($_POST["clothes"]) && $tipo == $_POST["clothes"])
                        echo "<li>$tipo$size$color</li>";
                    else if (isset($_COOKIE["interes"]) && $tipo == $_COOKIE["interes"] && !isset($_POST["clothes"]))
                        echo "<li>$tipo$size$color</li>";
                }
                echo "</ul>";

                if (isset($_POST["clothes"]))
                {
                    $cookie_name = "interes";
                    $cookie_value = $_POST["clothes"];
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                }
            }
        ?>
    </div>
</body>
</html>