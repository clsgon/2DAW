<?php
    $name = $_POST["name"];
    $license = $_POST["license"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $carBrand = $_POST["carBrand"];
    $safe = $_POST["safe"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/recogeDatos.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Matrícula</td>
            <td><?php echo $license ?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo $tel ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Marca</td>
            <td><?php echo $carBrand ?></td>
        </tr>
        <tr>
            <td>Seguro</td>
            <td><?php echo $safe ?></td>
        </tr>
        <tr>
            <td>Hora de Llamada</td>
            <td><?php 
            for($i = 1; $i < 4; $i += 1){
                if(isset($_POST["call$i"])){
                    echo $_POST["call$i"];
                }
            }
            ?></td>
        </tr>
    </table>
</body>
</html>