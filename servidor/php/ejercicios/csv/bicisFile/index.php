<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="min-width:481px" href="./style/index.css">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="POST" enctype="multipart/form-data">
        <label for="file">Suba el archivo de bicis</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Enviar">
    </form>
    <?php

    print_r($_FILES);
    $path = $_FILES["file"]["tmp_name"];
    if (!file_exists($path))
        echo "El archivo no existe";
    else
    {
        $myfile = fopen($path, "r");
        while($linea = fgets($myfile))
        {
            $date[] = explode(";",  $linea)[1];
            $vehicle[] = explode(";",  $linea)[9];
            $lesivity[] = explode(";", $linea)[14];
        }
        fclose($myfile);
    }
?>
    <table style="border-collapse: collapse;">
    <?php
        for($i = 0; $i < count($date) / 2; $i += 1){
            echo "<tr>";
                echo "<td style='border: solid black 1px;'>".$date[$i]."</td>";
                echo "<td style='border: solid black 1px;'>$vehicle[$i]</td>";
                echo "<td style='border: solid black 1px;'>$lesivity[$i]</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>