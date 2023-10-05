<?php
    $file = fopen("./marcas.txt", "r");
    while ($linea = fgets($file)) {
        $marca[] = explode(",",$linea)[0];
        $tag[] = explode(",",$linea)[1];
    }
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Document</title>
</head>
<body>
    <div class="df">
    <form action="./recogeDatos.php" method="post">
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Nombre">
        <br>
        <label for="license">Matrícula</label>
        <br>
        <input type="text" name="license" id="license" placeholder="Matrícula">
        <br>
        <label for="tel">Teléfono</label>
        <br>
        <input type="tel" name="tel" id="tel">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="carBrand">Marca</label>
        <select name="carBrand" id="carBrand">
            <?php
                for($i = 0; $i < count($marca); $i += 1)
                    echo "<option value=" . $tag[$i] . ">" . $marca[$i] . "</option>";
            ?>
        </select>
        <br>
        <h5>Seguro</h5>
        <label><input type="radio" name="safe" id="" value="Si">Si</label>
        <label><input type="radio" name="safe" id="" value="No">No</label>
        <br>
        <h3>Horas de llegadas</h3>
        <label><input type="checkbox" name="call1" id="morning" value="Mañana ">Mañana</label>
        <label><input type="checkbox" name="call2" id="afternoon" value="Tarde ">Tarde</label>
        <label><input type="checkbox" name="call3" id="night" value="Noche">Noche</label>
        <br>
        <input type="submit">
    </form>
    </div>
</body>
</html>