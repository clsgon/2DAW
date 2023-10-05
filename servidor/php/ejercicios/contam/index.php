<?php
    $path = "./csv/abr_mo23.csv";
    if (!file_exists($path))
        echo "El archivo no existe";
    else
    {
        $myfile = fopen($path, "r");

        while($linea = fgets($myfile))
        {
            $station[] = explode(";",  $linea)[2];
            $mag[] = explode(";",  $linea)[3];
            $h01[] = explode(";", $linea)[8];
        }
        fclose($myfile);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 0; $i < 217; $i += 1)
            echo $station[$i];
    ?>
</body>
</html>