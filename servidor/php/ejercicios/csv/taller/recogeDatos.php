<?php
    $name = $_POST["name"];
    $license = $_POST["license"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $carBrand = $_POST["carBrand"];
    $safe = $_POST["safe"];

    $path = "./csv/clientes.csv";
    $fd = fopen($path, "a");

    fwrite($fd, "$name,$license,$tel,$email,$carBrand,$safe, ");
    for($i = 1; $i < 4; $i += 1){
        if(isset($_POST["call$i"])){
            fwrite($fd, $_POST["call$i"]);
        }
    }
    fwrite($fd, "\n");
    fclose($fd);

    $fd = fopen($path, "r");

    while($linea = fgets($fd))
    {
        $aName[] = explode(",", $linea)[0];
        $aLicense[] = explode(",", $linea)[1];
        $aTel[] = explode(",", $linea)[2];
        $aEmail[] = explode(",", $linea)[3];
        $aBrand[] = explode(",", $linea)[4];
        $aSafe[] = explode(",", $linea)[5];
        $time[] = explode(",", $linea)[6];
    }
    fclose($fd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/recogeDatos.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Matrícula</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Marca</td>
            <td>Safe</td>
            <td>Hora de Llamada</td>
        </tr>
        <?php
            for($i = 0; $i < count($aName); $i += 1)
            {
                echo "<tr>";
                echo "<td>$aName[$i]</td>";
                echo "<td>$aLicense[$i]</td>";
                echo "<td>$aTel[$i]</td>";
                echo "<td>$aEmail[$i]</td>";
                echo "<td>$aBrand[$i]</td>";
                echo "<td>$aSafe[$i]</td>";
                echo "<td>$time[$i]</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>